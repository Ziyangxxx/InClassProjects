<?php


// To delete a cookie, reset it, but with an expiry
// date in the past.
setcookie('email', '', time() - (60 * 60 * 24));

header('Location: 03_cookies.php');