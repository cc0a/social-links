<?php

/*
 * Plugin Name: Social Links
 * Description: Add Social Icons With Links to Profiles
 * Version: 1.0
 * Author: James McKee
 */

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/social-links-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__) . '/includes/social-links-class.php');

// Register Widget
function register_social_links() {
	register_widget('Social_Links_Widget');
}

add_action('widgets_init', 'register_social_links'); // When widgets_init runs, register social links widget



