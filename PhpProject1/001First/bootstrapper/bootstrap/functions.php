<?php
function bootstrapper_enqueue_styles() {
	wp_register_style('bootstrap', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css');
	$dependencies = array('bootstrap');
	wp_enqueue_style('bootstrap_style', get_stylesheet_uri(), $dependencies);
}

function bootstrapper_enqueue_scripts() {
	$dependencies = array('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.7', true);
}

function bootstrapper_wp_setup() {
	add_theme_support('title-tag');
}

function bootstrapper_register_menu() {
	register_nav_menu('menu-principal', _('Menu Principal'));
}

add_action('wp_enqueue_scripts', 'bootstrapper_enqueue_styles');
add_action('wp_enqueue_scripts', 'bootstrapper_enqueue_scripts');
add_action('after_setup_theme', 'bootstrapper_wp_setup');
add_action('init', 'bootstraper_register_menu');
?>