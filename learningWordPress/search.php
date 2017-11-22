<!--search.php control the search result
    We copy the index.php the this file
-->

<?php

//get_header function dispaly the header 
//After we add header and footer file, this function
//will seek the content from these two files
get_header( );

if (have_posts()): ?>

    <!-- The search query will output what the user search for-->
    <h2> Search results for: <?php the_search_query(); ?></h2>
    <?php 
    while (have_posts()): 
        the_post();
    
        get_template_part( 'content');
        
    endwhile;

        else:
            echo '<p>No Content here</p>';

        endif;

//get_footer function display the footer
get_footer();


?>