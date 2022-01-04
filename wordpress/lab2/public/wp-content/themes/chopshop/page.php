<?php

/**
 * page Template for Chopshop
 */
get_header();
?>

<div id="content">

	<div id="primary">

        <article>

            <h1 class="archive_title"><?php the_title() ?></h1>
            
            <?php the_content() ;?>		

        </article>
        <?php if(is_page('contact')) :?>
            <form action="http://chopshop.dev/wp-comments-post.php" method="post" id="commentform">


            <p>
                <input type="text" name="author" id="author" value="" size="22" tabindex="1" aria-required='true' />
                <label for="author"><small>Name (required)</small></label>
            </p>

            <p>
                <input type="text" name="email" id="email" value="" size="22" tabindex="2" aria-required='true' />
                <label for="email"><small>Mail (will not be published) (required)</small></label>
            </p>

            <p>
                <input type="text" name="url" id="url" value="" size="22" tabindex="3" />
                <label for="url"><small>Website</small></label>
            </p>

            <p>
                <input name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
            </p>

        <?php endif ;?>

	</div><!-- /primary -->

	<div id="secondary">

		<?php get_sidebar() ;?>

	</div><!-- /secondary -->

</div><!-- /content -->

<?php

	get_footer();

?>