<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Debris</title>
<?php wp_head(); ?>
</head>
<body>
    <?php wp_nav_menu(['menu' => 'util']); ?>

    <?php wp_nav_menu(['menu' => 'main', 'menu_class' => 'menu nav navbar-nav']); ?>

    <?php wp_nav_menu(['menu' => 'footer']); ?>
</body>
<?php wp_footer(); ?>
</html>