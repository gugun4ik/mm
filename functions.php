<?php

show_admin_bar(false);

add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'header_menu1' => 'menu1',
    ) );
});

add_theme_support( 'post-thumbnails' );

function register_page_styles() {
    $theme_uri = get_stylesheet_directory_uri();
    wp_register_style('googleapis', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900');
    wp_register_style('default_CHANGE', $theme_uri.'/css/default_CHANGE.css');
    wp_register_style('all', $theme_uri.'/css/all.css');
    wp_register_style('fonts', $theme_uri.'/css/fonts.css');
    wp_register_style('momentum', $theme_uri.'/css/momentum.css');

    wp_enqueue_style('googleapis');
    wp_enqueue_style('default_CHANGE');
    wp_enqueue_style('all');
    wp_enqueue_style('fonts');
    wp_enqueue_style('momentum');
}
add_action('wp_enqueue_scripts', 'register_page_styles');

function register_page_scripts() {
    $theme_uri = get_template_directory_uri();
    wp_register_script('jquery_scripts', $theme_uri.'/js/jquery.min(1).js', array('jquery'));
    wp_register_script('dropotron', $theme_uri.'/js/jquery.dropotron.min.js', false);
    wp_register_script('slidertron', $theme_uri.'/js/jquery.slidertron.min.js', false);
	wp_register_script('skel.min', $theme_uri.'/js/skel.min(1).js', array('jquery'));
    wp_register_script('skel-viewport', $theme_uri.'/js/skel-viewport.min.js', array('jquery'));
    wp_register_script('util', $theme_uri.'/js/util.js', array('jquery'));
    wp_register_script('momentum', $theme_uri.'/js/momentum.slider.js', false);

    wp_enqueue_script('jquery_scripts');
    wp_enqueue_script('dropotron');
    wp_enqueue_script('slidertron');
    wp_enqueue_script('skel.min');
    wp_enqueue_script('skel-viewport');
    wp_enqueue_script('util');
    wp_enqueue_script('momentum');
}
add_action( 'wp_enqueue_scripts', 'register_page_scripts' );