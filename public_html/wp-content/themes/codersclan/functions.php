<?php
function codersclan_style() {
	wp_enqueue_style( 'codersclan-style', get_stylesheet_uri(), '20170218' );
	wp_enqueue_script( 'codersclan-script', get_template_directory_uri() . '/js/functions.js', [ 'jquery' ] );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', [ 'jquery' ] );
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/plugins/fontawesome/css/font-awesome.min.css' );
}

add_action( 'wp_enqueue_scripts', 'codersclan_style' );

add_theme_support( 'post-thumbnails' );

function register_menu() {
	register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}

add_action( 'init', 'register_menu' );

function codersclan_widgets_init() {

	register_sidebar( [
		'name'          => 'Logo Widget',
		'id'            => 'logo_sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	] );

	register_sidebar( [
		'name'          => 'Footer Social Widget',
		'id'            => 'footer_social_sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	] );

}

add_action( 'widgets_init', 'codersclan_widgets_init' );
