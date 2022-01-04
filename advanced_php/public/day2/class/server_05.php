<?php

header('Content-Type: application/json');

if('POST' !== $_SERVER['REQUEST_METHOD'])
{
	$error = ['error' => 'Unsuported request method'];

	echo json_encode($error);

	die;
}


// We could do something here with the data... eg: insert it into a database



// but for now, let's just echo the data that was sent to us

echo json_encode($_POST);