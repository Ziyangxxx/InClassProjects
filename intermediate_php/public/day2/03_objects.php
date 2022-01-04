<?php

require __DIR__ . '/../../config.php';

require __DIR__ . '/Car.php';

// Why use obects

// Keep code organized

// Encapsulation -- allows us to keep all functionality, and properties (variables) related to something (eg: a validator) hidden away and protected.

// Modularization -- allows us to create objects that can be easily used in multiple projects, or shared with other developers

// Data hiding -- Any sensitive information or functions can be hidden inside the object, and made inaccessible to parts of the program outside the object.

// Good way to think of an object is as a thing... or a container


// Objects are based on Classes
// 
// Classes are blueprints for objects



$honda = new Car();

echo "<p>{$honda->color}</p>";
//echo "<p>{$honda->make}</p>";
//echo "<p>{$honda->model}</p>";

$honda->color = 'Red';

dc($honda);

echo "<p>Color: {$honda->color}</p>";

echo "<p>Make: {$honda->getMake()}</p>";

echo "<p>Model: {$honda->getModel()}</p>";

// $dbh->require();
// $stmt->fetch();
// $stmt->fetchAll();



