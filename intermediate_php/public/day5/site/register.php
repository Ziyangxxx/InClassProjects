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


    //if there are no errors
    if(count($errors) === 0){
        
        $query = "INSERT INTO users (email, password) VALUE (:email, :password)";
        
        $stmt = $dbh->prepare($query);

        $params = array(
            ':email' => $_POST['email'],
            ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        );
        
        $stmt->execute($params);
        
        $user_id = $dbh->lastInsertId();

        if($user_id > 0){
            $_SESSION['user_id'] = $user_id;
            session_regenerate_id();
            flash('success', 'You have successfully registered!');
            header('Location: profile.php');// GET request --- part of PRG
            die;
        }else{
            die('Our system is having a problem. Try again later.');
        }
        }else{
            $_SESSION['errors'] = $errors;
            $_SESSION['post'] = $_POST;
            header('Location: register.php'); // GET request --- part of PRG
            die;
        }
    }

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

    <?php require __DIR__ . '/includes/nav.php'; ?>
    <?php require __DIR__ . '/includes/flash.php';?>

<h1>Regsiter</h1>

<?php dc($errors);?>

<form action="register.php" method="post">

<p><input name="email" type="text" placeholder="Your email address" /><br />
    <input name="password" type="password" placeholder="Your password" /><br />
    <button type="submit">Register</button></p>

</form>

</body>
</html>