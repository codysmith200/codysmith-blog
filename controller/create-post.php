<?php
// this will filter the input to the title
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
// this will filter the input to the post 
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

//this echos out thhe title and if we resived the title 
echo "<p>Title: $title</p>";
// this will echo out the same thing 
echo "<p>post: $post</p>";