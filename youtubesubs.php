<?php
/*
Plugin Name: Youtube Subs
Plugin URI: https://github.com/kdmarble
Description: Display Youtube sub button and count
Version: 1.0.0
Author: Keith Marble
Author URI: http://github.com/kdmarble
*/

//Prevent direct access
if(!defined('ABSPATH')){
    exit;
}

// Load scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

//Load class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

//REgister widget
function register_youtubesubs() {
    register_widget('Youtube_Subs_Widget');
}

//HOok in function
add_action('widgets_init', 'register_youtubesubs');