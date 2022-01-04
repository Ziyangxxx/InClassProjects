<?php

// In the modern PHP world, we can use the password_hash() 
// function to correctly salt and encrypt our passwords
// 
// Later, when we login, we use the password_verify() function
// to properly compare a hashed password to the user's login password

$params = array (

    ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
);

/* IN THE OLD DAYS
------------------------------------------------------------------------- */


// We used to use md5 for password encryption

// The adobe hack

// email   |  username   |  first  | last | password | hint 
// ----------------------------------------------------------
// a@b.com | angus       | angus   | hall  | sadfsadfdsafa | my password is password
// b@c.com | Tom         | Tom     | jones | sadfsadfdsafa | marge's hair 


// Adobe issues
// 1. Stored hints with passwords
// 2. No strong password rules
// 3. No salted passwords (same passwords have same hash)
// 4. used md5  -- weak hashing algorithm


// The correct way to hash and store a password (even if you are using md5)


// 1.  Enforce strong rules
// 2.  Salt the password prior to encryption
// 3.  Don't use hints

$salt = '5f4e668be883a';
$password = '2brn2b';
$hashed = md5($salt . $password);
echo $hashed; // b19d96a7f908cad6ff3123da555d090b
$db_pass = $salt . '.' . $hashed;
echo $db_pass; // 5f4e668be883a.b19d96a7f908cad6ff3123da555d090b

$salt = '5f4e676a23909';
$password = '2brn2b';
$hashed = md5($salt . $password);
echo $hashed; // 62c9b79f2c5d82ceae6a483685a759c2
$db_pass = $salt . '.' . $hashed;
echo $db_pass; // 5f4e676a23909.62c9b79f2c5d82ceae6a483685a759c2



