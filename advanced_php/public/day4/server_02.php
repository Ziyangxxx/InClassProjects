<?php

// Simple response script that returns any data
// we receive as a json encoded string

header('Content-Type: application/json');

echo json_encode($_GET);