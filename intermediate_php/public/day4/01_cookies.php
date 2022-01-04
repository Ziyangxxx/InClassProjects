<?php

require __DIR__ . '/../../config.php';

// $_COOKIE

// Set a cookie using 
// setcookie($name, $value, ....)
// generally: setcookie($name, $value, $expire)// expires on expires date

// session: setcookie($name, $value)
setcookie('name', 'Carlos');

$expires = time() + (60*60*24);// one day

setcookie('email', 'asdiop963@hotmail.com', $expires); // one day\

// Cookie values must be strings
$fruits = ['apple', 'orange','banana'];
setcookie('fruit', json_encode($fruits));

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>

<a href="02_delete_cookie.php"> </a>
    <?php foreach($_COOKIE as $key => $value):?>

        <?="<p>{$key} has value of {$value}</p>";?>

    <?php endforeach; ?>

        

</body>
</html>