<?php

// logic up here

$title = 'Register';
$slug = 'register';

if('POST' === $_SERVER['REQUEST_METHOD']) {
    require __DIR__ . '/register_post.controller.php';
    die;
}


require __DIR__ . '/../Views/register.view.php';

