<?php

require __DIR__ . '/../../config.php';


/**
 * PHP's preg_match() function
 */

// Why use capture groups?
// 
// Capture Groups allow us to isolate small pieces of a string,
// then output them (or save them to the database) in a consistently
// formatted way,
// 
// In other words, we can give the user some freedom as to how
// he enters the data, but we will always be consistent in the
// we use it or save it.


$pattern = '/^([0-9]{3})[\.\-\ ]?([0-9]{3})[\.\-\ ]?([0-9]{4})$/';

$num1 = '20412312342041231234';
$num2 = '123453456-';
$num3 = '204 123-1234';


if(preg_match($pattern, $num1, $x)) {
    echo "<p>{$num1} matches {$pattern}</p>";
    dc($x);
    printf('<p>(%s) %s-%s</p>', $x[1], $x[2], $x[3]);
} else {
    echo "<p>{$num1} does not match {$pattern}</p>";
    dc($x);
}


if(preg_match($pattern, $num2, $matches)) {
    echo "<p>{$num2} matches {$pattern}</p>";
    dc($matches);
    printf('<p>(%s) %s-%s</p>', $matches[1], $matches[2], $matches[3]);
} else {
    echo "<p>{$num2} does not match {$pattern}</p>";
    dc($matches);
}

if(preg_match($pattern, $num3, $matches)) {
    echo "<p>{$num3} matches {$pattern}</p>";
    dc($matches);
    printf('<p>(%s) %s-%s</p>', $matches[1], $matches[2], $matches[3]);
} else {
    echo "<p>{$num3} does not match {$pattern}</p>";
    dc($matches);
}



// Remember that Preg Match returns 1 for match
// 0 for no match
// and flase for error in execution
if(preg_match($pattern, $num1) === 0) {
    echo "<p>$num1 did not match $pattern";
} elseif(preg_match($pattern, $num1) === 1) {
    echo "<p>$num1 did matches $pattern";
} elseif(preg_match($pattern, $num1) === false) {
    echo "<p>There was an error executing the regex";
}


// Not always best idea to use regex for validation
// 
// For example
// 
// Numbers - use PHP built in function ... is_int  is_float  > < ==

// Things that do require regex
// - phone numbers
// - postal codes
// - legal strings (no special chars?  No numbers?)
// - SKU - agb-665!  -- uniquely formatted string

