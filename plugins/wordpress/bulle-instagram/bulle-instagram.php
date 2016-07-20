<?php
/*
Plugin Name: Bulle Instagram
Plugin URI: http://bulle.parsonii.com/plugins/wordpress/bulle-instagram
Description: Intégration des desniers posts de votre compte Instagram directement sur votre site WordPress
Version: 1.0
Author: Parsonii
Author URI: http://www.parsonii.com/
License: GPLv2
*/

define( 'SBIVER', '1.0' );

// Add shortcodes
add_shortcode('bulle-instagram', 'bulle_instagram');
function bulle_instagram($atts, $content = null) {
	$r = "";

	$r .= "test<br/>";

	return $r;
}
echo 'test';