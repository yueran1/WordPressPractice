<footer class="site-footer">

    <?php

        $args= array(
        'theme_location' => 'footer'
        );

    ?>
    <nav class="site-nav">
            <!--wp_nav_menu function generate the menu ul list
                for us
            -->
            <?php wp_nav_menu(  ) ?>
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