<?php
/*
Plugin Name: 	Webzifi_capitalize_content
Plugin URI:		https://wordpress.org/plugins/Webzifi-capitalize-content/
Description: 	capitalize a specific word in a wordpress content.
Version: 		1.0
Author:			Akagha Chinaka
Author URI: 	http://chinaka.com
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) )
	exit;

add_filter('the_content', array('web_capitalize_content','fix_spelling'));

class web_capitalize_content
{
	function fix_spelling($content)
	{
		$content = str_replace('wordpress','WordPress', $content);
		return "$content";
	}
}