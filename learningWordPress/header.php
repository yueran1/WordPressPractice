<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
    <meta charset="<?php bloginfo('charset' );?>">
    <!--This line make oursite responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo( 'name' );?></title>
    <?php wp_head();?>
</head>

<!--body_class function allow us to traget different
pages with our CSS very easily-->
<body <?php body_class(  );?>>

    <div class="container">
    <!-- site header-->
    <header class="site-header">
        <!--bloginfo function allow us to display
            the blog name and blog description
        -->

        <!--home_url function return the home page-->
        <!--Here is a bug. forget echo before home_url-->
        <h1><a href="<?php echo home_url();?>"><?php bloginfo( 'name' );?></a></h1>
        <h5><?php bloginfo( 'description' );?></h5>

        <nav class="site-nav">
            <!--or if_page('portfolio')-->
            <?php if(is_page(33)){ ?>
                <p>Thank you for viewing our portfolio</P>
            <?php }?>

            <?php

                $args= array(
                    'theme_location' => 'primary'
                );

            ?>
            <!--wp_nav_menu function generate the menu ul list
                for us
            -->
            <?php wp_nav_menu( $args ) ?>
        </nav>
    </header>
    

