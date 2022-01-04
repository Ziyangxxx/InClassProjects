<?php

$method = array(
	"method" => $_SERVER['REQUEST_METHOD']
);

header('Content-Type: application/json');

echo json_encode($method);