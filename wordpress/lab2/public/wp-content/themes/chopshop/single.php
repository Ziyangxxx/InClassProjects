<?php

/**
 * Single Template for Chopshop
 */
get_header();
?>

<div id="content">

	<div id="primary">

		<?php while(have_posts()) :?>

			<?php the_post() ;?>

			<article>

				<h1 class="archive_title"><?php the_title() ?></h1>
				<p><small>Posted by <?php the_author() ?> on <?php the_date() ?></small></p>
                <?php the_content() ;?>
                
                <p>
                    <textarea name="comment" id="comment" cols="66" rows="7" tabindex="4"></textarea>
                </p>

                <p>
                    <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
                </p>

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