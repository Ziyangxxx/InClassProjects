<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
$dbh = new PDO('sqlite:database.sqlite');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

header('Content-Type: application/json');

if('POST' != $_SERVER['REQUEST_METHOD']) {
	$error = ['error' => 'unsupported request method:' . $_SERVER['REQUEST_METHOD']];
	die(json_encode($error));
}

$query = "INSERT INTO author (name, country) 
			VALUES 
			(:name, :country)";

$stmt = $dbh->prepare($query);

$params = array(
	':name' => $_POST['name'],
	':country' => $_POST['country']
);

$stmt->execute($params);

$id = $dbh->lastInsertId();

if($id === 0) {
	$error = ['error' => 'There was a problem inserting the record'];
	die(json_encode($error));
}

$query = "SELECT * FROM author WHERE author_id = :id";

$stmt = $dbh->prepare($query);

$params = array(':id' => $id);

$stmt->execute($params);

$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($result);
