<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDD Theme One</title>
    <!-- <link rel="stylesheet" href="/wp-content/themes/test1/style.css"> -->
    <link rel="stylesheet" href="<?=get_stylesheet_uri()?>">
<?php wp_head(); ?>
</head>
<body>

    <nav>
        <?php wp_nav_menu(); ?>
    </nav>

    <div class="categories">

        <h2>Categories</h2>
        <?php wp_list_categories(['title_li' => '', 'depth' => 1]);?>

        <h2>Tags</h2>
        <?= get_the_tag_list() ?>
        
    </div>

    <!-- The Loop -->

    <?php while(have_posts()) : ?>
        <?php the_post(); ?>

        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

        <div class="content">
            <?php if(is_page() || is_single()) :?>
                <?php the_content(); ?>
            <?php else :?>
                <?php the_excerpt(); ?>
            <?php endif; ?>
        </div>

    <?php endwhile ;?>
<?php wp_footer();?>
</body>
</html>