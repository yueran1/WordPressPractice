<?php
/*
Template Name: Special Layout
*/ 

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
         <div class="column-container clearfix">
            <h2> <?php the_title(); ?></h2>

            <div class="info-box">
                <h4>Disclaimer Title</h4>
                <p>In this lesson we learn how to use page templates and conditional logic to apply different layouts to different 
                    WP pages. Check out my "Get a Developer Job" course: </p>
            </div>
            <?php the_content();?>

             </div>
         </article>
        
        
        <?php endwhile;

        else:
            echo '<p>No Content here</p>';

        endif;

//get_footer function display the footer
get_footer();


?>