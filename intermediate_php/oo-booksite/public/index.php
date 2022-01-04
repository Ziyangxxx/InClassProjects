<?php

/**
 * Front Controller / Rounter
 * Rountes requests to the correct controller
 */

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../config.php';

// only allow requests from these pages
$allowed = array(
	'about',
	'book_detail',
	'books',
	'contact',
	'home',
	'register'
);

$req = trim($_SERVER['REQUEST_URI'], '/');

// Determine what page user is looing for
// Determine what controller handles that page

if(empty($req)){

	$controller = 'home';

}else{
	// we have to secure 
	if(in_array($req, $allowed)){
		$controller = $req;
	}else{
		$controller = '404';// error not found
	}
};


// Delegate control to that controller

$path = __DIR__ . '/../app/Controllers/';

$file = $path . $controller . '.Controller.php';

if(file_exists($file)) {
	require $file;
	die;
} else {
	require $path . '404.controller.php';
	die;
}
