<?php

ob_start();// start output buffering
session_start();// start session

// Extract errors and post values from session
$errors = $_SESSION['errors'] ?? [];
$post = $_SESSION['post'] ?? [];

// Clear errors and post values from session
// so that they do not linger
unset($_SESSION['errors']);
unset($_SESSION['post']);

/**
 * Database credentials
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-8-25
 */

define('DB_DSN', 'mysql:hostname=localhost:8000;dbname=booksite');
define('DB_USER', 'root');
define('DB_PASS', '');

$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require __DIR__ . '/functions.php';

require __DIR__ . '/validators.php';