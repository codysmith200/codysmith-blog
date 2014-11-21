<?php
require_once(__dir__ . "/database.php");
session_start();
$path = "/codysmith-blog/";

// connects to localhost and will log in for me 
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

if(!isset($_SESSION["connection"])) {
$connection = new Database($host, $username, $password, $database);
$_SESSION["connection"] = $connection;
}

