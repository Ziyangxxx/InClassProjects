<?php

/**
 * Validator Functions
 * Set of reusable functions for validation form inputs
 * @author  Steve George <edu@pagerange.com>
 * @updated_at 2020-08-27
 */


/**
 * Validate required elements in an array
 * @param array $required array of required keys
 * @param array $array the array with stored key/value pairs
 * @param array &$errors array in which to store errors
 */
function required($required, $array, &$errors)
{
   foreach($required as $key) {
        if (empty($array[$key])) {
            $errors[$key][] = "{$key} is a required field.";
        }
   }
}

/**
 * Email validator
 * @param  string $email 
 * @param  string $field 
 * @param  array &$errors 
 * @return void 
 */
function email($email, $field, &$errors)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[$field][] = "{$field} must be a valid email address.";
    }
}

/**
 * Validate two values match
 * @param mixed $var1
 * @param mixed $var2 
 * @param string $field 
 * @param array &$errors 
 * @return void 
 */
function matches($var1, $var2, $field, &$errors)
{
    if ($var1 != $var2) {
        $errors[$field][] = "{$field} does not match.";
    }
}

/**
 * Validate a value is numeric and within a range
 * @param  string $num 
 * @param  string $field 
 * @param  int $min 
 * @param  int $max  
 * @param  array &$errors 
 * @return void 
 */
function num($num, $field, $min, $max, &$errors)
{
    if(!empty($num)) {
        if (!is_numeric($num)) {
            $errors[$field][] = "{$field} must be a number.";
        } elseif ($num < $min) {
            $errors[$field][] = "{$field} must have a minimum value of {$min}.";
        } elseif ($num > $max) {
            $errors[$field][] = "{$field} must have a maximum value of {$max}.";
        }
    }
}

function len($var, $field, $min, $max, &$errors)
{
    if (strlen($var) < $min) {
        $errors[$field] = "{$field} must have a minimum length of {$min}.";
    } elseif (streln($var) > $max) {
        $errors[$field] = "{$field} must have a maximum length of {$max}.";
    } 
}

/*function postalcode($name, $var, &$errors)
{
    $pattern = 
    if(){
        1
    }else{
        1
    }
}*/