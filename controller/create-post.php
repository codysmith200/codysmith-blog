<?php

// we required this so we can connect to the variebols 
require_once (__dir__ . "/../model/config.php");
// this will filter the input to the title
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
// this will filter the input to the post 
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

// this connects the query to the post 
$query = $_SESSION["connection"] ->query("INSERT INTO posts SET title = '$title', post = '$post'");
// this echos out if it seccessfully inserted the post 
if ($query) {
    echo "<p>successfully inserted post: $title</P>";
} else {
    // this echos out if we have a error
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
