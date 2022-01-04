<?php

session_start();

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

if('POST' === $_SERVER['REQUEST_METHOD']) {

    $dbh = new PDO('sqlite:database.sqlite');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // create query
    $query = "INSERT INTO users (email, password) VALUES (:email, :password)";

    // prepare query
    $stmt = $dbh->prepare($query);

    $salt = uniqid(); // create a random salt
    $hash = md5($salt . $_POST['password']); // hash the salt and the plaintext password
    $password = $salt . '.' . $hash; // save the salt + hash
    // var_dump($password);

    // set params
    $params = array(
        ':email' => $_POST['email'],
        ':password' => $password
    );

    $stmt->execute($params);

}


?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Register</title>
</head>
<body>

<h1>Register</h1>

<form action="register.php" method="post">

<p><input name="email" type="text" placeholder="Your email address" /><br />
    <input name="password" type="password" placeholder="Your password" /><br />
    <button type="submit">Register</button></p>

</form>


</body>
</html>