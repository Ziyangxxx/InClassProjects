<?php 

/**
 * Details for AfterSchool
 */
get_header();
?>

<div id="content">

    <div id="main">
        <article>
            <?php the_post(); ?>
            <h1 class="archive_title"><?php the_title() ?></h1>
            <p><small><?php the_date(); ?></small></p>
            <?php the_content(); ?>
            <h3>Leave a Reply</h3>
            <p>
                <textarea name="comment" id="comment" cols="66" rows="7" tabindex="4"></textarea>
            </p>

            <p>
                <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
            </p>

        </article>
    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>