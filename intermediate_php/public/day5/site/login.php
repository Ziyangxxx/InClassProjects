<?php

require __DIR__ . '/includes/config.php';

if('POST' === $_SERVER['REQUEST_METHOD']){

    $error = [];
    // validate your fields(entre validation)
    if(empty($_POST['email'])){
        $errors['email'] = "Email is required";
    }
    if(empty($_POST['password'])){
        $errors['password'] = "Password is required";
    }
    if(empty($errors)){
        $query = 'SELECT * FROM users WHERE email = :email';
        $stmt = $dbh->prepare($query);
        $params = array(
            ':email' => $_POST['email']
        );
        $stmt->execute($params);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($_POST['password'],$user['password'])){
            // user is valid
            flash('success', 'You have successfully logged in!');
            $_SESSION['user_id'] = $user['id'];
            session_regenerate_id(); // protection against session hijack
            header('Location: profile.php');// it will be '/profile' if using MVC
            die;
        }
    }// end if no errors

    flash('error', 'There was something wrong with your credentidals');
    $_SESSION['errosr'] = $errors;
    header('Location: login.php');// get request
    die;

}// end Post

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

    <?php require __DIR__ . '/includes/nav.php'; ?>
    <?php require __DIR__ . '/includes/flash.php';?>

<h1>Login</h1>

<form action="login.php" method="post">

<p><input name="email" type="text" placeholder="Your email address" /><br />
    <input name="password" type="password" placeholder="Your password" /><br />
    <button type="submit">Login</button></p>

</form>

</body>
</html>