<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">


	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head();?>
</head>

<body>
	<!--<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?> -->
	<div class="blog-masthead">
		<div class="container">
			<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
			<!--<nav class="blog-nav">
				<a class="blog-nav-item active" href="#">Home</a>
				<a class="blog-nav-item" href="#">New features</a>
				<a class="blog-nav-item" href="#">Press</a>
				<a class="blog-nav-item" href="#">New hires</a>
				<a class="blog-nav-item" href="#">About</a>

				

				
				<?php wp_list_pages('&title_li='); ?>
				<?php wp_dropdown_categories($args); ?>
				
				

				<form action="<?php bloginfo('url'); ?>/" method="get">
					<?php
						$select = wp_dropdown_categories('show_option_none=Select Category&show_count=1&orderby=name&echo=0&selected=6');
						$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
						echo $select;
					?>
					<noscript><input type="submit" value="View" /></noscript>
				</form>
			</nav> -->
		</div>
	</div>
	
	<div class="container">


		

		<div class="blog-header">
			<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
			<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
		</div>