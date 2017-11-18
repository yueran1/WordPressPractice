<div class="blog-post">
	<span class="ech-small"><a href="<?php the_permalink(); ?>"<h2 class="blog-post-title"><?php the_title(); ?></h2></a></span>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

	<?php the_content(); ?>

	<!--Show the thumbnail -->
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>

<!-- the rest of the content -->

</div><!-- /.blog-post -->