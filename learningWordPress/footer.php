<footer class="site-footer">

    <div class="footer-widgets clearfix">
        <?php if(is_active_sidebar( 'footer1' )): ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer1');?>
            </div>
        <?php endif; ?>

        <?php if(is_active_sidebar( 'footer2' )): ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer2');?>
            </div>
        <?php endif; ?>

        <?php if(is_active_sidebar( 'footer3' )): ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer3');?>
            </div>
        <?php endif; ?>


    </div>
    
    <nav class="site-nav">

            <?php

                $args= array(
                'theme_location' => 'footer'
                );

            ?>
            <!--wp_nav_menu function generate the menu ul list
                for us
            -->
            <?php wp_nav_menu( $args ) ?>
    </nav>
    <!-- Forget echo the date
        we can add ";" after the &copy in order to
        display it
    -->
    <p><?php bloginfo( 'name' );?> -&copy; <?php echo date('Y'); ?></p>
</footer>

</div>

<?php wp_footer();?>
</body>
</html>