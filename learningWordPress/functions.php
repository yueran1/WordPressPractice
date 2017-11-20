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


?>