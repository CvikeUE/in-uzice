<?php

add_action('wp_enqueue_scripts', 'vvm_load_scripts');
function vvm_load_scripts($hook)
{
    //dequeue default style.css
    wp_dequeue_style('style'); 

    $manifest_location = get_theme_file_path("assets/rev-manifest.json");
    //load from production
    if ($_SERVER["REMOTE_ADDR"] != '127.0.0.1' && file_exists($manifest_location)) :
        $assets = json_decode(file_get_contents($manifest_location));
        wp_enqueue_script('vvm-script', get_stylesheet_directory_uri() . '/assets/' . $assets->{'scripts.js'}, array('jquery'));
        wp_enqueue_style('vvm-style',  get_stylesheet_directory_uri() . '/assets/' . $assets->{'style.css'}, array(), '1.1', 'all');
    //load from local
    else :
        wp_enqueue_style('vvm-style',  get_template_directory_uri() . '/assets/style.css', array(), '1.1', 'all');
        wp_enqueue_script('vvm-script', get_stylesheet_directory_uri() . '/assets/scripts.js', array('jquery'));
    endif;
}
add_action('wp_enqueue_scripts', 'vvm_load_scripts');

if ($_SERVER["REMOTE_ADDR"] == '127.0.0.1') :
    function vvm_footer_scripts()
    {

?>
        <script id="__bs_script__">
            //<![CDATA[
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.17.5'><\/script>".replace("HOST", location.hostname));
            //]]>
        </script>
<?php
}
    add_action('wp_footer', 'vvm_footer_scripts');
endif;
