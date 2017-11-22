<?php

//get_header function dispaly the header 
//After we add header and footer file, this function
//will seek the content from these two files
get_header( );

if (have_posts()):


    ?>

    <h2><?php 
    
        if (is_category(  )){
            //echo 'This is a category';
            single_cat_title();
        }elseif (is_tag()){
            //echo 'Tag';
            single_tag_title();
        } elseif(is_author()){
            //echo 'author';
            the_post();
            echo'Author Archives: '.get_the_author();
            rewind_posts();
        } elseif(is_day()){
            //echo 'Day archive';
            echo 'Daily Archives'. get_the_date();
        } elseif(is_month()){
            //echo 'Month';
            //F -> month, Y-> year
            echo 'Monthly Archives' . get_the_date('F Y');
        } elseif(is_year()){
            //echo 'Year';
            echo 'Yearly Archives'. get_the_date('Y');
        }else{
            echo 'Archives';
        }
    
    ?></h2>
    <?php
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