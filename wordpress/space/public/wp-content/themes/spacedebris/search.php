<?php

get_header();

?>

<div class="row">

	<div id="primary" class="col-xs-12 col-sm-8">

        <h1>You are searching for: <?php the_search_query(); ?></h1>

        <h3>Returned <?= count($posts); ?> result(s)</h3>

        <?php if(have_posts()) : ?>

            <?php while(have_posts()): ?>
                <?php the_post() ?>
                
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                <?php the_excerpt(); ?>

            <?php endwhile; ?>
        
        <?php else :?>
            <h2>Try searching for something else.</h2>
        <?php endif ;?>    

	</div>

	<?php get_sidebar(); ?>

</div><!-- /row -->

<?php

get_footer();

?>