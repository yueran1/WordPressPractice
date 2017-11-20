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
        the_post(); ?>
    
        <!--
            The title will show twice since there
            are two posts        
         -->
         <article class="post">
            <h2><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h2>


            <!--Output the date for our post and make author name link-->
            <!--the_time function output the date-->
            <p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | by <a ><?php the_author_posts_link( )?></a> | Posted in
            <!-- actually the_category() will do the work-->
            <?php
                $categories= get_the_category(  );
                $separator = ",";
                $output = '';

                if($categories){
                    foreach($categories as $category){
                        //我之前还在想怎么把Output变成 <a>，忘记了Php是可以和html混合使用的
                        $output .= '<a href="' .get_category_link( $category->term_id ).'">'. $category->cat_name.'</a>' . $separator;
                    }

                    //trim() will remove the $separator from head and tail
                    echo trim($output, $separator);
                }
            ?>
            
            </p>
            <?php the_excerpt();?>
         </article>
        
        
        <?php endwhile;

        else:
            echo '<p>No Content here</p>';

        endif;

//get_footer function display the footer
get_footer();


?>