<?php
/**
* kuhn-child theme functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link https://developer.wordpress.org/themes/basics/theme-functions/
* @link http://codex.wordpress.org/Child_Themes
*
* @package kuhn-master
* @since kuhn-master 2.0
*/
// Enqueue scripts and styles

function kuhn_child_scripts(){
	wp_enqueue_style( 'kuhn-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'kuhn-style' ));
}
add_action( 'wp_enqueue_scripts', 'kuhn_child_scripts' );