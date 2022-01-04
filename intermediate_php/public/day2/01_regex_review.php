<?php


/**
 * Regular Expression Review
 */

// regular expressions are patterns


$pattern = '/cat/'; // literal regex matches specific word

// match cat or car
$pattern = '/ca[tr]/';
$pattern = '/cat|car/';

// color or colour 
$pattern = '/colou?r/';

// string between 7 and 12, upper or lowercase letters
$pattern = '/[a-zA-Z]{7,12}/';

$pattern = '/[A-z]{7,12}/';


// Two three character strings (lower case)
// abcdef
// abc
// def
$pattern = '/([a-z]{3})([a-z]{3})/';

//204-1231234 y
//2041231234 y
//204.123-1234 y
$pattern = '/([\d]{3})[-. ]?([\d]{3})[-. ]?([\d]{4})/'


$pattern = '/([A-z][\d][A-z])[- ]([\d][A-z][\d])/';


// Quantifiers
// [a-Z]?  // optional - 0 or 1
// [a-Z]+  // 1 or more
// [a-Z]*  // 0 or more
// {5}  // exactly 5
// {5,10}  // between 5 and 10
// {5,}  // 5 or more
// [.].{1}  //  .&  .)   ab  


// Look aheads /  assertions
// (?=)   



// preg_match()
// preg_replace()

