<?php

//get_header function dispaly the header 
//After we add header and footer file, this function
//will seek the content from these two files
get_header( );

if (have_posts()):
    while (have_posts()): 
        the_post(); ?>
    
        <!--
            The title will show twice since there
            are two posts        
         -->
         <article class="post page">
            <h2> <?php the_title(); ?></h2>
            <?php the_content();?>
         </article>
        
        
        <?php endwhile;

        else:
            echo '<p>No Content here</p>';

        endif;

//get_footer function display the footer
get_footer();


?>