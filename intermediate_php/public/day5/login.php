<?php

session_start();

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

if('POST' === $_SERVER['REQUEST_METHOD']) {

    $dbh = new PDO('sqlite:database.sqlite');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM users WHERE email = :email";

    $stmt = $dbh->prepare($query);

    $params = array(
        ':email' => $_POST['email']
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        $db_hash = $user['password'];
        $salt = substr($db_hash, 0, strpos($db_hash, '.'));
        // var_dump($salt);
        // var_dump($user);
        $new_hash = $salt . '.' . md5($salt . $_POST['password']);
        // var_dump($db_hash);
        // echo '<br />';
        // var_dump($new_hash);
        if($db_hash === $new_hash){
            die('You have logged in!');
            // header('Location: profile.php');
        }else{

        }
    }

    $message = 'There is something wrong.';
    // header('Location: login.php');
    // die;

}

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<?=$message ?? ''?>

<form action="login.php" method="post">

<p><input name="email" type="text" placeholder="Your email address" /><br />
    <input name="password" type="password" placeholder="Your password" /><br />
    <button type="submit">Login</button></p>

</form>


</body>
</html>