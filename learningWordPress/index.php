<?php

//get_header function dispaly the header 
//After we add header and footer file, this function
//will seek the content from these two files
get_header( );

if (have_posts()):
    while (have_posts()): 
        the_post(); 
    
        get_template_part('content');
        
    endwhile;

        else:
            echo '<p>No Content here</p>';

        endif;

//get_footer function display the footer
get_footer();


?>