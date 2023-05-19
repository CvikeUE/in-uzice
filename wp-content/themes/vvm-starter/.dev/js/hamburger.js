   
$('.hamburger-switch').click(function () {
    $(".hamburger-switch").each(function(){
        $(this).toggleClass('open');
    })
    $('body').toggleClass('mobile-navigation-active');
});

$('.page-overlay').click(function () {
    $(".hamburger-switch").each(function(){
        $(this).toggleClass('open');
    })
    $('body').toggleClass('mobile-navigation-active');
});

$('.nav-item-toggler').click(function () {
    $(this).toggleClass('expanded');
    $(this).next().slideToggle();
});

/* $('.menu a').click(function () {
    $(".hamburger-switch").each(function(){
        $(this).toggleClass('open');
    })
    $('body').toggleClass('mobile-navigation-active');
}); */
        
