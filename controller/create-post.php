<?php
// we required this so we can connect to the variebols 
require_once (__dir__ . "/../model/database.php");
// this connects us to mysqil 
 $connection = new  mysqil($host, $username, $password, $database);
// this will filter the input to the title
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
// this will filter the input to the post 
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

//this echos out thhe title and if we resived the title 
echo "<p>Title: $title</p>";
// this will echo out the same thing 
echo "<p>post: $post</p>";
//closes connection 
$connection->close();