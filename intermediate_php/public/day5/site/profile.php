<?php

require __DIR__ . '/includes/config.php';

if(empty($_SESSION['user_id'])){
    flash('error', 'Please log in or register to continue');
    header('Location: login.php');
}

$query = 'SELECT email FROM users WHERE id = :user_id';

$stmt = $dbh->prepare($query);

$params = ['user_id' => $_SESSION['user_id']];

$stmt->execute($params);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

    <?php require __DIR__ . '/includes/nav.php'; ?>

    <?php require __DIR__ . '/includes/flash.php';?>

<h1>Profile</h1>

<h2>Welcome back, <?=e($user['email'])?></h2>

</body>
</html>