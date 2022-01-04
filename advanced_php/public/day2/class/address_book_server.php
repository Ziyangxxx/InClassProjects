<?php

function main()
{
	header('Content-Type: application/json');

	// GET with no params, means: all results
	// GET with id param, means: one result
	// POST, means insert a record
	// PUT, means update a record
	// DELETE, means delete a record


	if('GET' === $_SERVER['REQUEST_METHOD'] && empty($_GET)) {
		$result = getAll();
	} elseif('GET' === $_SERVER['REQUEST_METHOD'] && !empty($_GET['id'])) {
		$result = getOne($_GET['id']);
		$result['hash'] = md5($result['emails'][0]['email']);
	}

	echo json_encode($result);
}








/* FUNCTIONS USED IN THIS FILE
--------------------------------------------------------------------- */


function getDbh()
{
	$dbh = new PDO('sqlite:database.sqlite');
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	return $dbh;
}


function getAll()
{
	// get all records
	$dbh = getDbh();
	$query = 'SELECT * FROM users';
	$stmt = $dbh->query($query);
	return $stmt->fetchAll();
}


function getOne($id)
{
	$dbh = getDbh();
	$query = "SELECT * FROM USERS WHERE id = :id";
	$params = array(
		':id' => (int) $id
	);
	$stmt = $dbh->prepare($query);
	$stmt->execute($params);
	$result = $stmt->fetch();
	$result['emails'] = getEmails($id);
	return $result;
}

function getEmails($user_id)
{
	// get emails for a record
	$dbh = getDbh();
	$query = "SELECT email FROM emails WHERE user_id = :user_id";
	$params = array(
		':user_id' => (int) $user_id
	);
	$stmt = $dbh->prepare($query);
	$stmt->execute($params);
	return $stmt->fetchAll();
}

main();
