<?php

// Display logo on front pages
function vvm_starter_theme_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    
    if(has_custom_logo()) {
        echo '
            <div class="logo-wrapper">
                <a class="logo-link" href="'. esc_url(site_url()) .'">
                    <img src="'. $image[0] .'" alt="'. esc_attr('VVM Starter Logo', 'vvm-starter') .'" class="logo-image">
                </a>
            </div>
        ';
    } else {
        echo '
            <div class="logo-wrapper">
                <a class="logo-link" href="'. esc_url(site_url()) .'">
                    <img src="'. get_stylesheet_directory_uri() .'/assets/images/vvm-starter-logo.svg" alt="'. esc_attr('VVM Starter Logo', 'vvm-starter') .'" class="logo-image">
                </a>
            </div>
        ';
    }
    
}


// Add expand button for navigation items
function cfw_add_arrow( $output, $item, $depth, $args ){

    //Only add class to 'top level' items on the 'mobile' menu.
    if('mobile_navigation' == $args->theme_location && ($depth === 0 OR $depth === 1 OR $depth === 2) ){
        if (in_array("menu-item-has-children", $item->classes)) {
            $output .='<span class="nav-item-toggler"></span>';
        }
    }

    return $output;
}
add_filter( 'walker_nav_menu_start_el', 'cfw_add_arrow',10,4);


