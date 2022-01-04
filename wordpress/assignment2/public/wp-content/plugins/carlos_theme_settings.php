<?php 

/**
 * Plugin Name: Carlos Theme Settings
 * Author: Carlos
 * Author URI: http://wddziyang.com/
 * Plugin URI: http://wddziyang.com/
 * Description: Settings common to all WDD themes
 * Version: 1.0
 */

if(!function_exists('config_theme')) {

	/**
	 * Add theme support
	 * @return Void
	 */
	function config_theme()
	{
		register_nav_menus();
		add_theme_support('post-thumbnails');
	}

	add_action('init', 'config_theme');

}

// Specify excerpt length
if(!function_exists('my_excerpt_length')){
    function my_excerpt_length($length){
        return 20;
    }
    add_filter('excerpt_length', 'my_excerpt_length');
}