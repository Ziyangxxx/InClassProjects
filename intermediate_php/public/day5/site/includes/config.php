<?php

ob_start(); // start output buffering
session_start(); // start session


$errors = $_SESSION['errors'] ?? [];
$post = $_SESSION['post'] ?? [];
$flash = $_SESSION['flash'] ??[];

unset($_SESSION['errors']);
unset($_SESSION['post']);
unset($_SESSION['flash']);

// DB Credentials
define('DB_DSN', 'mysql:host=localhost;dbname=users');

$dbh = new PDO(DB_DSN, 'root', '');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require __DIR__ . '/functions.php';

if(!empty($_GET['logout'])){
    if(!empty($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
        session_regenerate_id();
        flash('success', 'You have successfully logged out!');
    }else{
        flash('error', 'You can not log out before log in!');
    }

    header('Location: login.php');
    die;
}// This is logout process
