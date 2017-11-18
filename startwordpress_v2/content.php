<div class="blog-post">
	<a href="<?php the_permalink(); ?>"<h2 class="blog-post-title"><?php the_title(); ?></h2></a>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

	<!--show the number of comments of corresponding post-->
	<a href="<?php comments_link(); ?>">
	<?php
	printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
	</a>

	<?php if (has_post_thumbnail()) { ?>
		<div class="row">
			<div class="col-md-4">
				<?php the_post_thumbnail('thumbnail');?>
			</div>
			<div class="col-md-6">
				
				<?php the_excerpt(); ?>
			</div>
		</div>
	<?php } else { ?>
	<?php the_excerpt(); ?>
	<?php } ?>

<!-- the rest of the content -->

</div><!-- /.blog-post -->