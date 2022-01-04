<?php

function main(){

    try{
        if('GET' === $_SERVER['REQUEST_METHOD'] && !empty($_GET['book_id'])){
            $result = getOne($_GET['book_id']);

        }elseif('GET' === $_SERVER['REQUEST_METHOD'] && !empty($_GET['s'])){
            $result = search($_GET['s']);
            
        }else{
            $result = getAll();
            // var_dump($_SERVER['REQUEST_METHOD']);
            
            // var_dump($_SERVER);
        }

    }
    catch(Exception $e){
        echo json_encode($e->getTrace());
    }

    echo json_encode($result);
}

// Functions 
// -----------------------------------

function getDbh(){
    $dbh = new PDO('sqlite:database.sqlite');
    $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $dbh;
}

function getAll(){
    $dbh = getDbh();
    $query = 'SELECT book.*, author.name as author, genre.name as genre
            FROM book 
            JOIN author ON book.author_id = author.author_id
            JOIN genre ON book.genre_id = genre.genre_id
            ORDER BY title ASC';
    $stmt = $dbh -> query($query);
    return $stmt -> fetchAll();
}

function getOne($id){
    $dbh = getDbh();
    $query = 'SELECT book.*, author.name as author, genre.name as genre, 
            format.name as format, publisher.name as publisher
            FROM book 
            JOIN author ON book.author_id = author.author_id
            JOIN genre ON book.genre_id = genre.genre_id
            JOIN format ON book.format_id = format.format_id
            JOIN publisher ON book.publisher_id = publisher.publisher_id
            WHERE book_id = :book_id';
    $stmt = $dbh -> prepare($query);
    $params = array(
        ':book_id' => (int) $id
    );
    $stmt -> execute($params);
    $result = $stmt -> fetch();
    return $result;
}

function search($str){
    $dbh = getDbh();
    $query = "SELECT book.*, author.name as author, genre.name as genre
            FROM book 
            JOIN author ON book.author_id = author.author_id
            JOIN genre ON book.genre_id = genre.genre_id
            WHERE (book.title LIKE '%' || :s || '%'
            OR 
            author.name LIKE '%' || :s || '%')
            ORDER BY title ASC";
    $stmt = $dbh -> prepare($query);
    $params = array(
        ":s" => $str
    );
    $stmt -> execute($params);
    return $stmt -> fetchAll();
}

main();

// SELECT book.*, author.name as author, genre.name as genre
// FROM book 
// JOIN author ON book.author_id = author.author_id
// JOIN genre ON book.genre_id = genre.genre_id
// WHERE (title LIKE '%' || 'c' || '%'
// OR 
// author LIKE '%' || 'c' || '%')
// ORDER BY title ASC