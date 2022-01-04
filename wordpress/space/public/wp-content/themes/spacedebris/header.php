<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />

<title>Space Debris - Sub Page Template</title>

<meta name="viewport" content="width=device-width" />


<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js?ver=2.1.3'></script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- NAVBAR -->

<div class="container-fluid">

<div class="row">

	<nav class="navbar navbar-inverse">

		<div class="navbar-header">	
				<a class="navbar-brand" href="#"><img src="<?= get_template_directory_uri(); ?>/images/space_debris_logo.png" alt="logo" /></a>
				<a class="menu_toggle" href="#">Menu</a>
		</div>
		
		<?php wp_nav_menu(['menu' => 'main', 'menu_class' => 'menu nav navbar-nav']);?>

	</nav>

	</div><!-- /row -->

</div><!-- / NAV -->

<!-- CONTENT -->

<div class="container">

<div class="row">

    <?php if(is_front_page()) : ?>

    <div id="site_tagline" class="row">

        <div class="col-xs-12">

            <h1>Bringing Space Debris Home!</h1>

        </div>

    </div><!-- /row -->

    <div class="row" id="slider">

        <?= do_shortcode('[ssslider id="42"]');?>

    </div><!-- /row -->

    <?php else : ?>

	<div id="page_header" class="col-xs-12">
		<img src="<?= get_template_directory_uri(); ?>/images/page_header.jpg" alt="Space Junk" />
    </div>
    
    <?php endif ;?>
	
</div><!-- /row -->