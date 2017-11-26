<?php

function learningWordPress_resources(){

    //wp_enqueue_style( 'style', get_stylesheet_uri());

    wp_enqueue_style(
        'style', 
        get_stylesheet_uri(),
        array(),
        rand(111,9999),
        'all'
    );

}

add_action( 'wp_enqueue_scripts', 'learningWordPress_resources');

//Navigation menus
//In header and footer we neal the menu location place
//In functions.php we register the menu location place
///in order to use them
register_nav_menus( array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')

    
) );

//Get top ancestor
function get_top_ancestor_id(){
    global $post;

    if ($post->post_parent){
        $ancestors=array_reverse(get_post_ancestors( $post->ID ));
        return $ancestors[0];


    }

    return $post->ID;
}

function have_children(){
    global $post;

    $pages=get_pages( 'child_of='.$post->ID );
    return count($pages);

}

//cutomize excerpt word count length
function custom_excerpt_length(){
    return 25;
}

add_filter( 'excerpt_length','custom_excerpt_length' );


function learningWordPress_setup(){

    //Navigation Menus
    register_nav_menus( array(
        'Primary' =>__('Primary Menu'),
        'footer' => __('Footer Menu')
    ) );
    //Add feature image support
    add_theme_support( 'post-thumbnails' );

    //set image size, to make the_post_thumbnail() be able to use
    add_image_size('small-thumbnail',180,90,true);
    add_image_size( 'banner-image', 920, 210, true );

    //Add post format support
    add_theme_support('post-formats', array(
        'aside',
        'gallery',
        'link'

    ));
}

add_action('after_setup_theme','learningWordPress_setup');

//Add our widget Locations
function ourWidgetsInit(){

    //The name make Sidebar showed in widget dashboard
    //We can use function dynamic_sidebar('id') to decide 
    //where we want to put sidebar in index.php 
    register_sidebar( array(
        'name'=>'Sidebar',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="my-special-class">',
        'after_title' => '</h4>'
    ) );

    

    register_sidebar( array(
        'name'=>'Footer Area 1',
        'id' => 'footer1'
    ) );

    register_sidebar( array(
        'name'=>'Footer Area 2',
        'id' => 'footer2'
    ) );

    register_sidebar( array(
        'name'=>'Footer Area 3',
        'id' => 'footer3'
    ) );

    register_sidebar( array(
        'name'=>'Footer Area 4',
        'id' => 'footer4'
    ) );
}

add_action( 'widgets_init','ourWidgetsInit');

?>