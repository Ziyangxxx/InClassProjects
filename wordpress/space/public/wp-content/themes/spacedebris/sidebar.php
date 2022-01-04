<div id="secondary" class="col-xs-12 col-sm-4">

    <?php 
        $pages = get_pages(['meta_key' => 'featured', 'meta_value' => '1']);
    ?>

    <?php foreach($pages as $page): ?>
        <div class="callout col-xs-12">
            <h2><a href="<?=get_the_permalink();?>"><?=get_the_title($page -> ID); ?></a></h2>
            <a href="<?php the_permalink(); ?>">
                <?=get_the_post_thumbnail($page->ID);?>
            </a>
        </div>
    <?php endforeach; ?>

</div>