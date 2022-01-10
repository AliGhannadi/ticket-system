<?php 
require_once '../config.php';
if(is_login()){
    redirect('index.php');
 }
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel Login</title>
    </head>


    <body>
    <h1>Admin Panel Login</h1>
    <div class="form-box">
    <form action="login.php" method="post" id="form">
     
    <input type="text" name="username" placeholder="Username"><br>
    <input type="text" name="password" placeholder="Password"><br><br><br><br>
    <input type="submit" value="Login" name="adminsubmit" id="submit">
</form>
</div>
</body>


</html>