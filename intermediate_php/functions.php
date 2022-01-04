<?php
/**
 *    ____  ___       __________.__                               
 *    \   \/  /__ __  \____    /|__|___.__._____    ____    ____  
 *     \     /|  |  \   /     / |  <   |  |\__  \  /    \  / ___\ 
 *     /     \|  |  /  /     /_ |  |\___  | / __ \|   |  \/ /_/  >
 *    /___/\  \____/  /_______ \|__|/ ____|(____  /___|  /\___  / 
 *          \_/               \/    \/          \/     \//_____/ 
 *    _________              .__                
 *    \_   ___ \_____ _______|  |   ____  ______
 *    /    \  \/\__  \\_  __ \  |  /  _ \/  ___/
 *    \     \____/ __ \|  | \/  |_(  <_> )___ \ 
 *     \______  (____  /__|  |____/\____/____  >
 *             \/     \/                      \/
 */

// Utility Functions

/**
 * Simple var dumper and continue
 * @param  mixed $var Variable to dump
 * @return Void
 */
function dc($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

/**
 * Simple var dumper and die
 * @param  mixed $var Variable to dump
 * @return Void
 */
function dd($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
	die;
}

/**
 * Sanitize a string for output
 * @param  string $str
 * @return string
 */
function e($str)
{
	return htmlentities($str, ENT_QUOTES, "UTF-8");
}