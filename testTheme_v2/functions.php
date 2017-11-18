<?php 

	//load css into the website's front end
	function mytheme_enqueue_style(){
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css',array(),rand(111,9999),'all');
		wp_enqueue_style(
			'ec-css-hover', 
			get_template_directory_uri() . '/ec-css-hover.css',
			array(),
			rand(111,9999),
			'all'
		);
		wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css',array(),rand(111,9999),'all');
	}
	add_action('wp_enqueue_scripts', 'mytheme_enqueue_style');


	// WordPress Titles
	add_theme_support('title-tag');

	// Support Featured Images
	add_theme_support('post-thumbnails');


	add_action( 'after_setup_theme', 'register_multiple_widget_areas' );

	function register_multiple_widget_areas()
	{
	    register_sidebar(
	        array(
	        'name'          => 'sidebar',
	        'id'            => 'sidebar',
	        'description'   => 'describe the function of the box.'
	        )
	    );
	    register_sidebar(
	        array(
	        'name'          => 'Header',
	        'id'            => 'header-widget',
	        'description'   => 'Goes at the top of the page.'
	        )
	    );
	}


?>