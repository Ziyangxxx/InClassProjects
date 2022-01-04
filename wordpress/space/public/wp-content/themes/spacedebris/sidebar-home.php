<div id="callouts" class="row">

    <?php $pages = get_pages(['meta_key' => 'featured', 'meta_value' => '1']); ?>

    <?php foreach($pages as $page) :?>
        <div class="callout col-xs-12 col-sm-4">
        <h2><?= get_the_title($page->ID)?></h2>
        <?= get_the_post_thumbnail($page->ID);?>
        <p><?= get_the_excerpt($page->ID) ?></p>
        <a class="btn btn-primary pull-right" href="<?=get_the_permalink($page->ID)?>">Read More &gt;&gt;</a>
        </div>
    <?php endforeach ;?>

</div><!-- /row -->