<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

function main() 
{
	header('Content-Type: application/json');
	if('POST' == $_SERVER['REQUEST_METHOD']) {
		$id = save_user($_POST);
		$results = ['id' => $id];

	} elseif (!empty($_GET['user_id'])) {
		$results = get_user($_GET['user_id']);
	} else {
		$results = get_all_users();
	}

	echo json_encode($results);
}







/* FUNCTIONS USED IN THIS PROGRAM
----------------------------------------------------- */

function get_dbh()
{
	$dbh = new PDO('sqlite:register.sqlite');
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
	return $dbh;
}

function save_user($user)
{
	$dbh = get_dbh();
	$query = "INSERT INTO users (first, last, email) 
		VALUES (:first, :last, :email)";
	$params = array(
		':first' => $user['first'],
		':last' => $user['last'],
		':email' => $user['email']
	);
	$stmt = $dbh->prepare($query);
	$stmt->execute($params);
	$id = $dbh->lastInsertId();
	return ['id' => $id];
}

function get_user($user_id)
{
	$dbh = get_dbh();
	$query = 'SELECT * FROM users WHERE id = :user_id';
	$params = array(
		':user_id' => $user_id
	);
	$stmt = $dbh->prepare($query);
	$stmt->execute($params);
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

function get_all_users()
{
	$dbh = get_dbh();
	$query = 'SELECT * FROM users';
	$stmt = $dbh->prepare($query);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



/* RUN PROGRAM
---------------------------------------------- */

main();



