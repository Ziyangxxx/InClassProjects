<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/">Welcome</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php $pages = get_pages(['include'=>'51,2,53,55']); ?>
            
            <ul class="navbar-nav ml-auto">
                <?php foreach($pages as $page) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= get_the_permalink($page->ID); ?>">
                        <?= get_the_title($page->ID); ?>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>
            
        </div>
    </div>
</nav>