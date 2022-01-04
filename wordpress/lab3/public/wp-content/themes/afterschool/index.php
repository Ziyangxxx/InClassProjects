<?php 
/**
 * Template Name: news
 */

get_header();

?>

<div id="content">

    <div id="main">

        <h1 class="archive_title">News</h1>
        <?php while(have_posts()) :?>
            <?php the_post() ;?>
            <article>

                <h2><a href="<?php the_permalink() ?>"><?php the_title() ;?></a></h2>
                <p><small><?php the_date() ?></small></p>
                <?php the_excerpt() ;?>

            </article>
        <?php endwhile ;?>
    </div>

    <?php get_sidebar() ;?>

</div>

<?php get_footer() ;?>