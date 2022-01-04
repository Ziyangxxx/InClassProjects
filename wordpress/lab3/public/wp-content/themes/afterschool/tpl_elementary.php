<?php 

/**
 * Template Name: elementary
 */
get_header();
?>

<div id="content">

    <div id="main">
        <article>
            
            <?php the_post(); ?>
            <h1 class="archive_title"><?php the_title() ?></h1>
            <p><small><?php the_date(); ?></small></p>
            <?php the_content() ;?>

        </article>
    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>