<?php
session_start();
require('../view/partials/navbar.php');
require('../model/connection.php');
$config = require('../model/config.php');


if(isset($_GET['id'])){
   
     $id = $_GET['id'];
    $connect = new Connection($config);
    $user = $connect->getUserByID($id);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="../controller/adduser.php" method='POST'>
            
         <div>
            <div><h5>Name</h1></div>
            <div><input type="text"  <?php if($user['name']){ echo "value =".$user['name'];} ?>  name='name'></div>
        </div>
        <div>
            <div><h5>Email</h1></div>
            <div><input type="email" <?php if($user['email']){ echo "value =".$user['email'];} ?>    name='email'></div>
        </div>

        <div>
            <div><h5>Prfolie Image</h1></div>
            <div><input type="file" <?php if($user['profile']){ echo "value =".$user['profile'];} ?>    name='profile'></div>
        </div>
        
        <div>
            <div><input hidden type="text" <?php if($user['id']){ echo "value =".$user['id'];} ?>  name='id'></div>
        </div>



        <div class="div_btn">
            <input type="submit" value='Save' name="Save">
        </div>


        </form>

</body>
</html>
