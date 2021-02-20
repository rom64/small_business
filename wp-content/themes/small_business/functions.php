<?php 
add_action('wp_enqueue_scripts','theme_styles' );
add_action('wp_enqueue_scripts','theme_scripts' );
add_action('after_setup_theme', 'theme_register');


	function theme_styles(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('main_style', get_template_directory_uri().'/assets/styles/main_style.css');
		wp_enqueue_style('custom', get_template_directory_uri().'/assets/styles/custom-responsive-style.css');
		wp_register_style('all','//use.fontawesome.com/releases/v5.0.7/css/all.css');
		wp_enqueue_style('all');
	}

	function theme_scripts(){
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script('all', get_template_directory_uri(). '/assets/script/all-plugins.js', ['jquery'], null);
		wp_enqueue_script('plugin-active', get_template_directory_uri(). '/assets/script/plugin-active.js', ['jquery'], null);
	}

	function theme_register(){
		register_nav_menu('top', 'top-menu');
		register_nav_menu('sidebar_menu', 'menu in sidebar');
	}
	
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');
	
	
?>