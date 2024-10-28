<?php
/*
Plugin Name: bbPress Custom CSS File
Plugin URI: http://wordpress.org/extend/plugins/bbpress-custom-css-file/
Description: If activated bbPress will use bbpress.css in your theme directory.
Version: 1.0
Author: Jared Atchison
Author URI: http://jaredatchison.com 
*/

/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @version 1.0
 * @author Jared Atchison
 * @copyright Copyright (c) 2012, Jared Atchison
 * @link http://jaredatchison.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Removes default CSS in favor of custom CSS
 *
 * @since 1.0
 * @uses wp_deregister_style() To remove default CSS
 * @uses wp_enqueue_style() To add our own CSS
 */
function bbp_custom_css_enqueue(){
	
	// Unregister default bbPress CSS
	wp_deregister_style( 'bbp-default-bbpress' );
	
	// Register new CSS file in our active theme directory
	wp_enqueue_style( 'bbp-default-bbpress', get_stylesheet_directory_uri() . '/bbpress.css' );
	
}
add_action( 'bbp_enqueue_scripts', 'bbp_custom_css_enqueue' );