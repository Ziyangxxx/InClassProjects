<?php

/**
 * Template Name: Archives
 */
get_header();
?>

<div id="content">

	<div id="primary">

		
		<?php while(have_posts()) :?>

			<?php the_post() ;?>
            <h1 class="archive_title">Posts from <?php the_date() ?></h1>
			<article>

				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<p><small>Posted by <?php the_author() ?></small></p>
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