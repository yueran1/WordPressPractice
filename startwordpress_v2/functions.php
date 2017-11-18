<?php 

	//load css into the website's front end
	function mytheme_enqueue_style(){
		wp_enqueue_style(
			'style', 
			get_stylesheet_uri(),
			array(),
			rand(111,9999),
			'all'
		);
	}
	add_action('wp_enqueue_scripts', 'mytheme_enqueue_style');

	// WordPress Titles
	add_theme_support( 'title-tag' );

	// Custom Post Type
// Custom Post Type
function create_my_custom_post() {
	register_post_type( 'my-custom-post',
			array(
			'labels' => array(
					'name' => __( 'My Custom Post' ),
					'singular_name' => __( 'My Custom Post' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action( 'init', 'create_my_custom_post' );
?>