<?php



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>

    <?php foreach($_COOKIE as $key => $value):?>

        <?="<p>{$key} has value of {$value}</p>";?>

    <?php endforeach; ?>

        

</body>
</html>