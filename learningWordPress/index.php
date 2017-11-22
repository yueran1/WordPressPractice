<?php

//get_header function dispaly the header 
//After we add header and footer file, this function
//will seek the content from these two files
get_header( );

if (have_posts()):
    while (have_posts()): 
        the_post(); 
        
        //When we have the second parameter get_post_format()
        //the format will follow the content-aside.php file we created
        //Because we create a post with format aside
        get_template_part('content', get_post_format());
        
    endwhile;

        else:
            echo '<p>No Content here</p>';

        endif;

//get_footer function display the footer
get_footer();


?>