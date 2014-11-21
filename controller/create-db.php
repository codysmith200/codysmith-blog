<?php

// __dir__ . gets me out of the folder i am in an and brings 
// me to source file to go to model/database.php
require_once(__dir__ . "/../model/config.php");


$query = $_SESSION["connection"]->query("CREATE TABLE posts("
        . "id int(11)NOT NULL AUTO_INCREMENT,"
        . "tittle varchar(255) NOT NULL,"
        . "post text not Null,"
        . "PRIMARY KEY (id))");

if ($query) {
    echo "succesfully created table";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}








