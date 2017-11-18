<?php

function learningWordPress_resources(){

    wp_enqueue_style( 'style', get_stylesheet_uri());

}

add_action( 'wp_enqueue_scripts', 'learningWordPress_resources');

//Navigation menus
//In header and footer we neal the menu location place
//In functions.php we register the menu location place
///in order to use them
register_nav_menus( array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')

    
) )


?>