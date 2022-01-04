<?php

$title = 'Books';
$slug = 'books';

require __DIR__ . '/../Models/book.model.php';

$books = getAllBooks($dbh);


require __DIR__ . '/../Views/books.view.php';