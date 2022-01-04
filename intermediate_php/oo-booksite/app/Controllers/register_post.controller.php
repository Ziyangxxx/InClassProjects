<?php

use App\Lib\Validator;

// Register POST controller

$v = new Validator($_POST);

$required = array(
    'email',
    'password',
    'password_confirm',
    'age'
);

$v->required($required);
$v->email('email');
$v->num('age');
$v->matches('password', 'password_confirm');

// if errors
if(count($v->errors()) > 0) {

    // redirect to form with errors and post values
    $_SESSION['post'] = $v->post();
    $_SESSION['errors'] = $v->errors();
    
    header('Location: /register');
    die;

} else { 

    // redirect to profile

}