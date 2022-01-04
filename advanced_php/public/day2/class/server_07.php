<?php

header('Content-Type: application/json');

if('POST' !== $_SERVER['REQUEST_METHOD'])
{
	$error = ['error' => 'Unsuported request method'];

	echo json_encode($error);

	die;
}




// but for now, let's just echo the data that was sent to us

// Get the JSON string from the POST submission
$json = file_get_contents('php://input');

// Convert JSON string to PHP object
$post = json_decode($json);

// We could do something here with the data... eg: insert it into a database


// But for now, let's just return it to prove we received it
echo json_encode($post);