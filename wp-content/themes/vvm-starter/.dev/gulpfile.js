var paths = {
  sassMainFile: './sass/style.scss',
  jsMainFile: './js/scripts.js'
};

var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var autoprefixer = require('gulp-autoprefixer');
var uglify = require("gulp-uglify");
var browserSync = require('browser-sync').create();
var notify = require("gulp-notify");
var rigger = require("gulp-rigger");
var reload = browserSync.reload;
const rev = require('gulp-rev');
var del = require('del');
const cleanCSS = require('gulp-clean-css');
var wait = require('gulp-wait');
var sourcemaps = require('gulp-sourcemaps');


// ##CLEAR FILES
gulp.task('cleanCSS', function () {
  return del(['../assets/*.css'], { force: true });
});
gulp.task('cleanJS', function () {
  return del(['../assets/*.js'], { force: true });
});


//####LOCAL BUILD###//
gulp.task('sass', gulp.series('cleanCSS', async function () {
  gulp.src([paths.sassMainFile])
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'expanded' }).on('error', notify.onError("Error: <%= error.message %>")))
    .pipe(autoprefixer("last 5 versions", "> 1%", "ie 8", "ie 7"))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('../assets'))
    .pipe(browserSync.stream())
}));
gulp.task('scripts', gulp.series('cleanJS', async function () {
  return gulp.src(paths.jsMainFile)
    .pipe(rigger())
    .pipe(gulp.dest('../assets'))
    .pipe(browserSync.stream())
}));


//###PRODUCTION BUILD###//
gulp.task('sassPROD', gulp.series('cleanCSS', async function () {
  gulp.src([paths.sassMainFile])
    .pipe(sass({ outputStyle: 'expanded' }).on('error', notify.onError("Error: <%= error.message %>")))
    .pipe(autoprefixer("last 5 versions", "> 1%", "ie 8", "ie 7"))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(rev())
    .pipe(gulp.dest('../assets'))
    .pipe(rev.manifest('../assets/rev-manifest.json', { merge: true }))
    .pipe(gulp.dest('../assets'))
    .pipe(browserSync.stream())
    .pipe(notify("Done compiling & syncing"))
}));
gulp.task('scriptsPROD', gulp.series('cleanJS', async function () {
  return gulp.src([paths.jsMainFile])
    .pipe(wait(5000))
    .pipe(rigger())
    .pipe(uglify())
    .pipe(rev())
    .pipe(gulp.dest('../assets'))
    .pipe(rev.manifest('../assets/rev-manifest.json', {
      merge: true
    }))
    .pipe(gulp.dest('../assets'))
    .pipe(browserSync.stream())
    .pipe(notify("Done compiling & syncing JS"))
}));

//##WATCH FOR CHANGES
gulp.task('watch', async function () {
  gulp.watch('./sass/**/*.scss', gulp.series('sass'));
  gulp.watch('./js/**/*.js', gulp.series('scripts'));
  gulp.watch("../**/*.php").on("change", reload);
});

gulp.task('browser-sync', async function () {
  browserSync.init({ open: false });
});



//##major tasks
gulp.task('default', gulp.series('sass', 'scripts', 'browser-sync', 'watch'));
gulp.task('production', gulp.series('scriptsPROD', 'sassPROD'));


//HOW TO USE
//Run "gulp" for autoreload
//run "gulp production" to build optimized files for production

// interesting
// https://gist.github.com/renarsvilnis/ab8581049a3efe4d03d8