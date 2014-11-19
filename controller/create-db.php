<?php

// __dir__ . gets me out of the folder i am in an and brings 
// me to source file to go to model/database.php
require_once(__dir__ . "/../model/config.php");
// this code connects me to localhost and logs in 
$connection = new mysqli($host, $username, $password);
// shows connection error 
if ($connection->connect_error) {
    die("error: " . $connection->connect_error);
}
$exists = $connection->select_db($database);

if (!$exists) {
    $query = $connection->query("CREATE DATABASE $database");
    if ($query) {
        echo "secsessfully created  database:" . $database;
    }
} else {
    echo "database already exists";
}

$query = $connection->query("CREATE TABLE posts("
        . "id int(11)NOT NULL AUTO_INCREMENT,"
        . "tittle varchar(255) NOT NULL,"
        . "post text not Null,"
        . "PRIMARY KEY (id))");

if ($query) {
    echo "succesfully created table";
} else {
    echo "$connection->error";
}
$connection->close();







