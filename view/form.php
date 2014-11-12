<?php
// this direcs me to config .php 
 require_once(__dir__ ."/../model/config.php");
?>

<h1>create blog post</h1>
<!-- this is a post -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <lable for="<title"></lable>
        <input type="text" name="title"/>
    </div>
    
      <div>
          <lable for="post">post: </lable>
          <textarea name="post"></textarea>
    </div>
    <!-- this is a button  -->
    <div>
        <button type="submit">submit</button>
    </div>
</form>

