<?php

$user = array(
	'first' => 'Dave',
	'last' => 'Jones',
	'email' => 'dave@example.com'
);

$json = json_encode($user);

// Content-Type: text/html
header('Content-Type: application/json');

echo $json;