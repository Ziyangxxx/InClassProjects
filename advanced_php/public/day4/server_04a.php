<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
header('Content-Type: application/json');


function main()
{
	checkPost();

	$id = addAuthor();

	if($id === 0) {
		$error = ['error' => 'There was a problem inserting the record'];
		die(json_encode($error));
	}

	$author = getAuthor($id);

	echo json_encode($author);

	die;
}











/* FUNCITONS USED IN THIS PROGRAM
------------------------------------------------------------------- */

function getDbh()
{
	$dbh = new PDO('sqlite:database.sqlite');
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}


function checkPost()
{

	if('POST' != $_SERVER['REQUEST_METHOD']) {
		$error = ['error' => 'unsupported request method'];
		die(json_encode($error));
	}
}

function addAuthor()
{

	$dbh = getDbh();

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

	return $id;

}

function getAuthor($id)
{

	$dbh = getDbh();

	$query = "SELECT * FROM author WHERE author_id = :id";

	$stmt = $dbh->prepare($query);

	$params = array(':id' => $id);

	$stmt->execute($params);

	$result = $stmt->fetch(PDO::FETCH_ASSOC);

	return $result;
}

main();