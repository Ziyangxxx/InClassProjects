<?php
register_nav_menus();

add_theme_support('post-thumbnails');

if(!function_exists('spacedebrids_scripts')){
    function spacedebris_scripts(){
        wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css', 
            [], '3.3.2', false);

        wp_enqueue_style('spacedebris', get_stylesheet_uri(), ['bootstrap'], '1.0', false);
    
        wp_enqueue_script('spacedebris', get_template_directory_uri() . '/js/spacedebris', ['jquery'], 
            '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'spacedebris_scripts');
}
