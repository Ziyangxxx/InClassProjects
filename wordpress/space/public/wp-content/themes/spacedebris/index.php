<?php

get_header();

?>

<div class="row">

	<div id="primary" class="col-xs-12 col-sm-8">

		<h1>News</h1>

		<?php while(have_posts()): ?>
			<?php the_post() ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<p><small>Posted on <?php the_date() ?>.</small></p>

			<?php the_excerpt(); ?>

		<?php endwhile; ?>

	</div>

	<?php get_sidebar(); ?>

</div><!-- /row -->

<?php

get_footer();

?>