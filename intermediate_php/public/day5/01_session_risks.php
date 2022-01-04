<?php

require __DIR__ . '/../../config.php';

$_SESSION['user_id'] = 6;

if(!empty($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'World';
}



/**
 * Escape strings that contain allowed HTML tags
 * @param  string $content
 * @return string
 */
function e_html($content) 
{
    $content = remove_php_tags($content);
    $safe = strip_tags($content, '<br><br /><p><b><i><strong><em><a><img />');
    return $safe;
}

/**
 * Output a string within HTML
 * @param  string $string
 * @return  string 
 */
function e($string, $raw = false) {
    if($raw) {
        return $string;
    }
    return htmlentities($string, NULL, "UTF-8");
}


/**
 * Escape string to be used in attributes
 * @param  string $string
 * @return string 
 */
function e_attr($string)
{
    return htmlentities($string, ENT_QUOTES, "UTF-8");
}


?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title></title>
</head>
<body>

<!-- BAD!!!! 
<h1><?="Hello, " . $name ?></h1>
-->
<!--GOOD-->
<h1><?="Hello, " . e($name) ?></h1>
<!--

This assumes the user is LOGGED IN.

Unescaped output as above is succeptible to XSS attack.  Code can be
injected into the page... for example, a little bit of javascript that
reads the browser cookie and send it to a bad guy.  That bad guy will
now have access to the PHPSESSID cookie...

All he has to do is insert that cookie in his browser, and visit the site
the original user was visiting, and he will be LOGGED IN as the original
user.

This is not so much an issue when we use a framework with a templating system
like Twig or Blade, where we output using framework syntax:

<h1>Hello, {{ $name }}</h1>

-->

<input value="<?=e_attr($value)?>" />

<div id="content">

    <h1><?=e($title);?></h1>

    <?=e($content, true)?>

</div> 



</body>
</html>