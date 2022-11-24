<?php

define('DB_HOSTS', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'jon');
define('DB_NAME', 'gallery');
define('DB_PORT', 3306);


try {
    $dbh = new PDO('mysql:host=database:3306;dbname=gallery', DB_USER, DB_PASSWORD);
    // $res = $dbh->query('select * from users');
    foreach($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
    var_dump($res);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}