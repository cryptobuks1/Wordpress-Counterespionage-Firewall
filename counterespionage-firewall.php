<?php
/**
 * @package Counterespionage_Firewall
 * @version 1.0
 */
/*
Plugin Name: Counterespionage Firewall
Plugin URI: http://wordpress.org/extend/plugins/counterespionage-firewall
Description: CEF protects against reconnaissance by hackers and otherwise illegitimate traffic such as bots and scrapers. Increase performance, reduce fraud, thwart attacks, and serve your real customers.
Author: Floodspark
Version: 1.0
Author URI: http://floodspark.com
*/

//user agent string validation method:
function check_ua(){
	$uas = $_SERVER['HTTP_USER_AGENT'];
	if(strpos($uas, "curl") !== false){
		wp_die("404");
	}
}

//perform all validations within:
function validate() {
	check_ua();
}

add_action( 'init', 'validate' );

?>
