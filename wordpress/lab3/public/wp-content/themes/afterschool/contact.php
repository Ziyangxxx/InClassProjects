<?php 

/**
 * Template Name: contact
 */
get_header();
?>

<div id="content">

    <div id="main">
        <article>
            
            <?php the_post(); ?>
            <h1 class="archive_title">Contact</h1>
            <?php the_content() ;?>

        </article>
    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>