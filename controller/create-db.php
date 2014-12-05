<?php

// __dir__ . gets me out of the folder i am in an and brings 
// me to source file to go to model/database.php
require_once(__dir__ . "/../model/config.php");

$query = $_SESSION["connection"]->query("CREATE TABLE posts("
        . "id int(11)NOT NULL AUTO_INCREMENT,"
        . "tittle varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "DATETIME datetime NOT NULL,"
        . "PRIMARY KEY (id))");

if ($query) {
    echo "succesfully created table";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
   $query = $_SESSION["connection"]->query("CREATE TABLE users ("
           . "id int(11) NOT NULL AUTO_INCREMENT,"
           . "username varchar(30) NOT NULL,"
           . "email varchar(50) NOT NULL,"
           . "password char(128) NOT NULL, "
           . "salt char(128) NOT NULL, "
           . "PRIMARY KEY (id))");
   if($query) {
       echo "<p>successfully created table: users</P>";
   
   }
   else {
       echo "<P>" . $_SESSION["connection"]->error . "</P>";
   }






