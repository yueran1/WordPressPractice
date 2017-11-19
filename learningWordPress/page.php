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

            <!-- 
                here is the child page menu part
            -->
            <?php if(have_children() or $post->post_parent >0){   ?>
                <nav class="site-nav children-links clearfix">
                    <span class="parent-link"><a href="<?php echo the_permalink(get_top_ancestor_id());?>"><?php echo get_the_title(get_top_ancestor_id());?></a></span>
                    <ul>
                        <?php
                                $args= array(
                                    //specify the current page been viewed
                                    //only child of our current page will be showed
                                    //*******'child_of' => $post->ID,

                                    'child_of' => get_top_ancestor_id(),
                                    //make list title "page" disapear
                                    'title_li'=>''
                                )

                            ?>
                        <?php wp_list_pages($args); ?>
                    </ul>
                 </nav>

            <?php  }  ?>
            


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