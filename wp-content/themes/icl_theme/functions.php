<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'myMenu');

function myMenu(){
    register_nav_menu('headMenu', 'Menu in header');
    register_nav_menu('footMenu', 'Menu in footer');
}

function style_theme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
}

function scripts_theme(){
    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js');
    wp_enqueue_script('weather', get_template_directory_uri().'/assets/js/weather.js');
}
