<?php
require_once(__dir__ . "/database.php");

$path = "/codysmith-blog/";

// connects to localhost and will log in for me 
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

$connection = new Database($host, $username, $password, $database);


