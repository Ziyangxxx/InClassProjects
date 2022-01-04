<?php 

/**
 * About page for AfterSchool
 */
get_header();
?>

<div id="content">

    <div id="main">
        <article>
            
            <?php the_post(); ?>
            <h1 class="archive_title"><?php the_title() ?></h1>
            <p><small>By <?php the_author(); ?></small></p>
            <?php the_content(); ?>

        </article>
    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>