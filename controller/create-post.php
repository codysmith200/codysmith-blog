<?php
// we required this so we can connect to the variebols 
require_once (__dir__ . "/../model/database.php");
// this connects us to mysqil 
 $connection = new mysqli($host, $username, $password, $database);
// this will filter the input to the title
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
// this will filter the input to the post 
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

 // this connects the query to the post 
$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
// this echos out if it seccessfully inserted the post 
 if($query){
     echo "<p>successfully inserted post: $title</P>";   
} else {
    // this echos out if we have a error
    echo "<p>$connection->error</p>";
}
    
    
    
//closes connection 
$connection->close();