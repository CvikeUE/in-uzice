<?php
    add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
    function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
     
    wp_add_dashboard_widget('custom_help_widget', 'Changelog', 'custom_dashboard_help');
    }
     
    function custom_dashboard_help() {
        $file_path = get_stylesheet_directory_uri()."/changelog.md";
        echo nl2br( htmlspecialchars( file_get_contents( $file_path )));
    
    }

?>