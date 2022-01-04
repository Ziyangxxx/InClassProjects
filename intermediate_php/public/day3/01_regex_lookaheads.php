<?php

// Rule 1: Any character, 8 or more 
// Rule 2: Must contain Upper case letters
// Rule 3: Must have numbers

// password -- matches first rule

$pattern = '/(?=.*[A-Z])(?=.*[0-9])^.{8,}$/'