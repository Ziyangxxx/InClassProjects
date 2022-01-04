<?php

$user = array(
    'first' => 'John',
    'last' => 'Doe',
    'email' => 'test123@gmail.com',
    'age' => 99,
    'country' => 'CA'
);

setcookie('user', json_encode($user));

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <?php
        $new_user = json_decode($_COOKIE['user']);
        
    ?>
    <?php foreach($new_user as $key => $value) : ?>
        <?="<p><strong>{$key}</strong>: {$value}</p>";?>
    <?php endforeach; ?>
</body>
</html>