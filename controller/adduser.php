<?php
session_start();
require('../model/connection.php');
$config = require('../model/config.php');

if(isset($_POST['Update'] )||isset($_POST['Save'] ) ){
     $id=$_POST['id'];
     $name=$_POST['name'];
     $email=$_POST['email'];
     $image = $_FILES['profile']['tmp_name'];
     $imgContent = file_get_contents($image);
     
     $connect  = new Connection($config);
     $update = $connect->UpdateUserById($id,$name,$email,$imgContent);
    
     if(!isset($_POST['Update'] )){
          header("Location:../view/profile.php");
     }else{
          header("Location:../view/setting.php");
     }
}else if(isset($_POST['Add'])){
     header('Location:../controller/registration.php');
}