<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_enqueue_scripts', 'loadJS');


function style_theme(){
	wp_enqueue_style('all', get_template_directory_uri()."/assets/css/all.css");
	wp_enqueue_style('style', get_stylesheet_uri());

}
function loadJS(){
	wp_enqueue_script('jquery-2.2.0', get_template_directory_uri().'/assets/js/jquery-2.2.0.js');
	wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js');
	wp_enqueue_script('jquery');
}

