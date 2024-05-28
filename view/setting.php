<?php
require('../view/partials/navbar.php');
session_start();
if(!$_SESSION['email']=='sathsiksdckap@gmail.com'){
    echo 'Authorized people only allowed';
}

require('../model/connection.php');
$config = require('../model/config.php');

$stmt= new Connection($config);
$users = $stmt->getUser();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><a href="../view/addUser.php">Add User</a></div>
   <div class="userContainer">

   <?php
    
    foreach($users as $user){
        ?>

<div class="card">
    
     

     <?php 
     $template = "<h3>{$user['name']}</h1> \n 
                  <p>{$user['email']}</p> \n
                  <small>{$user['password']}</small>\n <br><br>
                  <a href='../view/addUser.php?id={$user["id"]}'>Edit</a>\n 
                  <a href='../controller/delete.php?id={$user["id"]}'>Delete</a>";
    
                  echo($template);     

     ?>
    
     
</div>
       


        <?php
    }
    ?>
    



   </div>
   
</body>
</html>
