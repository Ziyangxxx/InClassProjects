<?php

header('Content-Type: application/json');

// Equiv in JS of writing:  $data = {};
$data = new stdClass();

$json = file_get_contents('php://input');
$php_input = json_decode($json);

$data->post = $_POST;
$data->get = $_GET;
$data->php_input = $php_input;
$data->request_method = $_SERVER['REQUEST_METHOD'];

echo json_encode($data);