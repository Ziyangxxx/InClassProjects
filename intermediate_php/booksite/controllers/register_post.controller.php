<?php


// Register POST controller

$errors = [];

$required = array(
    'email',
    'password',
    'password_confirm'
);

required($required, $_POST, $errors);

email($_POST['email'], 'email', $errors);

// len($_POST['first_name'], 'first_name', 1, 255, $errors);

num($_POST['age'], 'age', 1, 120, $errors);

matches($_POST['password'], $_POST['password_confirm'], 'password_confirm', $errors);


// if errors
if(count($errors) > 0) {

    // redirect to form with errors and post values
    $_SESSION['post'] = $_POST;
    $_SESSION['errors'] = $errors;
    
    header('Location: /?p=register');
    die;

} else { 

    // redirect to profile

}