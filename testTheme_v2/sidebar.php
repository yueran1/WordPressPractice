<div id="sidebar">
	<h2 ><?php _e('Categories'); ?></h2>
	<ul class="categories-ul" >
		<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
	</ul>
	
	<h2 ><?php _e('Archives'); ?></h2>
	<ul class="archives-ul">
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

	<?php the_widget( 'WP_Widget_Archives', 'dropdown=1' ); ?> 

	<h2><?php _e('Menus'); ?></h2>
	<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_2' ) ); ?>
	<!--<?php wp_nav_menu( array() ) ?> -->
	<!-- <?php the_widget(); ?> -->
	<?php dynamic_sidebar( 'sidebar' ); ?>
	


	<?php 
			if (have_posts()) :
				while (have_posts()) : the_post(); 
				get_template_part('content_sidebar', get_post_format());
		?>
		<!-- <h1><?php the_title(); ?></h1 
		<h4>Posted on <?php the_time('F jS, Y') ?></h4>
		<p><?php the_content(__('(more...)')); ?></p> -->
		<hr> <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>