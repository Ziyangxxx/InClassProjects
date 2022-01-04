<?php

$var = htmlentities($_GET['s'] ?? 'World', ENT_QUOTES, 'UTF-8');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Test</title>
</head>
<body>

<h1>JS Test</h1>

<script>
alert('hello <?=$var?>');
</script>
    
</body>
</html>