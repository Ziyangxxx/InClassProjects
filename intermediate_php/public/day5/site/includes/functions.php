<?php

/**
 * Utility Functions
 */


/**
 * Simple var_dump and continue
 * @param  Mixed $var Variable to dump
 * @return Void
 */
function dc(...$params)
{
    	echo "<pre>\n";
    foreach($params as $var) {
    	var_dump($var);
    }
    	echo "</pre>\n";
}


/**
 * Simple var_dump and die
 * @param  Mixed $var Variable to dump
 * @return Void
 */
function dd(...$params)
{
    		echo "<pre>\n";
	foreach($params as $var) {
    		var_dump($var);
	}
    		echo "</pre>\n";
	die;
}

/**
 * Sanitize a string for output
 * @param  string $str 
 * @return string
 */
function e($str)
{
    return htmlentities($str, ENT_QUOTES, "UTF-8", );
}

/**
 * Sanitize a string for output
 * @param int $var1
 * @param int $var2
 * @return int
 */
function test($var1, $var2)
{
	return $var1 + $var2;
}

function flash($type, $message)
{
	$_SESSION['flash'][] = [$type, $message];
}


