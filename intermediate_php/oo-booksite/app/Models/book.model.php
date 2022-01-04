<?php

function getAllBooks($dbh)
{
	$query = 'SELECT book.*,
	            author.name as author,
	            publisher.name as publisher,
	            format.name as format,
	            genre.name as genre
	            FROM
	            book
	            JOIN author USING(author_id)
	            JOIN publisher USING(publisher_id)
	            JOIN format USING(format_id)
	            JOIN genre USING(genre_id)
	            ORDER BY title
				ASC';
				
	$stmt = $dbh->prepare($query);

	$stmt->execute();

	return $stmt->fetchAll(PDO::FETCH_ASSOC);

}