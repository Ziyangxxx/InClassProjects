<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Blogit Boys!</title>

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	
	<link type="text/css" rel="stylesheet" href="style.css" /> -->

	<link rel="stylesheet" href="<?=get_stylesheet_uri()?>">
<?php wp_head() ;?>
</head>
<body>
	<div class="container">

		<header class="main">

			<span class="site_title">Blogit Boys!</span>

		</header>
		

		<div id="content">

			<div id="primary">
			
				 <article>
				 <?php while(have_posts()) : ?>
					<?php the_post(); ?>

					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

					<div class="content">
						<?php if(is_page() || is_single()) :?>
							<?php the_content(); ?>
						<?php else :?>
							<?php the_excerpt(); ?>
						<?php endif; ?>
					</div>

				 <?php endwhile ;?>

				</article><!-- /article -->

			</div><!-- /primary -->

			<div id="secondary">

				<h3>Menu</h3>

					<?php wp_nav_menu(); ?>

				<h3>Archive</h3>
					<?php wp_list_categories(['title_li' => '', 'depth' => 1]) ;?>
					
				<h3 id="time"><small>Time Arhive</small></h3>
					<small><?php wp_get_archives( $args='year');?></small>
				

			</div><!-- /secondary -->

		</div><!-- /content -->

		<footer class="main">

				<p class="copyright">Copyright &copy; 2015 by Blogit</p>
		</footer>
		
	</div><!-- /container -->
	
	</body>
<?php wp_footer() ;?>
</html>