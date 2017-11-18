<div class="blog-post">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></h2></a>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	
	<?php the_content(); ?>

	<div class="row">
			<div class="col-md-4">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('thumbnail');
				} ?>
			</div>
	</div>
</div><!-- /.blog-post -->