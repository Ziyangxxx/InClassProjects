<?php

$title = 'Books';
$slug = 'books';

require __DIR__ . '/../models/book.model.php';

$books = getAllBooks($dbh);


require __DIR__ . '/../views/books.view.php';