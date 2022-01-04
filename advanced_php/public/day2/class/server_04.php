<?php

header('Content-Type: application/json');

if(empty($_GET)) {
	$error = ['error' => 'Please add data to your GET request'];
	echo json_encode($error);
	die;
}

// Do something with the data



// For now, just send it back...
// Send data back as JSON encoded string
echo json_encode($_GET);