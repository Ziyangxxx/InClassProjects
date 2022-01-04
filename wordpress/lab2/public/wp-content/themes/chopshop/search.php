<?php

/**
 * Template Name: Search Page
 */
get_header();
?>

<div id="content">

	<div id="primary">

		<h1 class="archive_title">Your search results:</h1>
		<?php while(have_posts()) :?>

			<?php the_post() ;?>

			<article>

				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<p><small>Posted by <?php the_author() ?> on <?php the_date() ?></small></p>
				<?php the_excerpt() ;?>

			</article><!-- #post-## -->

		<?php endwhile ;?>
	</div><!-- /primary -->

	<div id="secondary">

		<?php get_sidebar() ;?>

	</div><!-- /secondary -->

</div><!-- /content -->

<?php

	get_footer();

?>