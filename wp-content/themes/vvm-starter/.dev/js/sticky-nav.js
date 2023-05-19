     
$window           = $(window);
$navigation_link  = $('.menu-item a');
$navigation       = $('.site-header');
$body             = $('body');

tech_sticky_nav();
$window.scroll(function() {
    tech_sticky_nav();
});

function tech_sticky_nav() {

    if($window.scrollTop() > 90 ) {
        if(!$navigation.hasClass('site-header--scrolled')) {
            $navigation.addClass('site-header--scrolled');
        }
        if(!$body.hasClass('body--scrolled')) {
            $body.addClass('body--scrolled');
        }
    } else {
        $navigation.removeClass('site-header--scrolled');
        $body.removeClass('body--scrolled');
    }

    if($window.scrollTop() > 350) {
        if(!$navigation.hasClass('site-header--shrinked')) {
            $navigation.addClass('site-header--shrinked');
            $navigation_link.addClass('nav-link--shrinked');
            $body.addClass('body-shrinked');
        }
    } else {
        if($navigation.hasClass('site-header--shrinked')) {
            $navigation.removeClass('site-header--shrinked');
            $navigation_link.removeClass('nav-link--shrinked');
            $body.removeClass('body-shrinked');
        }
    }

}
