
<?php
// this direcs me to config .php 
require_once(__dir__ . "/../model/config.php");
?>

<h1>register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email" />
    </div> 
    
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div> 
    
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div> 
    
    <div>
        <button type="submit">submit</button>
    </div> 
    
    
</form>