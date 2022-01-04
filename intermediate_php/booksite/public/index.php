<?php

/**
 * Front Controller / Rounter
 * Rountes requests to the correct controller
 */

require __DIR__ . '/../config.php';

// only allow requests from these pages
$allowed = array(
	'about',
	'book_detail',
	'books',
	'contact',
	'home'
);

// Determine what page user is looing for
// Determine what controller handles that page
if(empty($_GET['p'])){

	$controller = 'home';

}else{
	// we have to secure 
	if(in_array($_GET['p'], $allowed)){
		$controller = $_GET['p'];
	}else{
		$controller = '404';// error not found
	}
};

// Delegate control to that controller

$path = __DIR__ . '/../controllers/';

$file = $path . $controller . '.controller.php';

if(file_exists($file)) {
    require $file;
} else {
    require $path . '404.controller.php';
}
