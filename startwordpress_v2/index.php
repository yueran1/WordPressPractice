
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

   

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <?php get_header(); ?>

  <div class="row">

    <div class="col-sm-8 blog-main">

      <?php

      if (have_posts()): while (have_posts()): the_post();

          get_template_part( 'content', get_post_format() ); 

      endwhile; ?>
      
      <nav>
        <ul class="pager">
          
          <li><?php previous_posts_link('Previous'); ?></li>
          <li><?php next_posts_link('Next'); ?></li>

        </ul>

      </nav>

      <?php endif;?>

    </div> <!-- /.blog-main -->

    <?php get_sidebar(); ?>

  </div> <!-- /.row -->

<?php get_footer(); ?>

    
  </body>
</html>
