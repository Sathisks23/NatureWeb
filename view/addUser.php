<?php

require('../view/partials/navbar.php');
require('../model/connection.php');
$config = require('../model/config.php');

$status ='Add';
$action ="../controller/registration.php";
if(isset($_GET['id'])){
    $status ='Update';
    $action = '../controller/adduser.php';
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


<form action= <?php echo $action ?> method='POST'>

        <div>
            <div><h5>Name</h1></div>
            <div><input type="text"  <?php if($user['name']){ echo "value =".$user['name'];} ?>  name='name'></div>
        </div>
        <div>
            <div><h5>Email</h1></div>
            <div><input type="email" <?php if($user['email']){ echo "value =".$user['email'];} ?>    name='email'></div>
        </div>


        <?php 
        
        if($_SERVER['REQUEST_URI']=='/view/addUser.php'){
            $template = "<div><div><h5>Password</h5></div><div><input type='password' name='password' ></div></div>";
        echo $template;
        }
        
        ?>

        <div>
            <div><input hidden type="text" <?php if($user['id']){ echo "value =".$user['id'];} ?>  name='id'></div>
        </div>

        <?php
        
        $template = "<div> <input type='text' name='password'> <div>"
        
        ?>

        <div>
            <br>
        <?php echo "<input type='submit' value='$status' name='$status'>" ?>  
        </div>

</form>


</body>
</html>