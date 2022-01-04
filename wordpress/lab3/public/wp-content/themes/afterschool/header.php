<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After School</title>
    <link rel="stylesheet" href="<?= get_stylesheet_uri() ?>">
    <?php wp_head() ;?>
</head>
<body class="lightblue">
    
    <div class="container">

        <div id="header" class="darkblue">

            <nav id="util">
                <ul class="menu">
                    <?php wp_nav_menu(['menu' => 'main']); ?>
                </ul>
            </nav>

            <img id="logo" src="/wp-content/themes/afterschool/images/logo.png" alt="Logo">

        </div>

        <nav id="main" class="menu middleblue">
            <ul class="menu">
                <?php wp_nav_menu(['menu' => 'top']); ?>
            </ul>
        </nav>