<?php
session_start();
require('../model/connection.php');
$config = require('../model/config.php');


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con = new Connection($config);
    $user = $con->getUserByEmail($email);

    if($user && $user['password']==md5($password)){

        $_SESSION['name']= $user['name'];

        if($user['email']=='sathishksdckap@gmail.com' && $_SESSION['name']= $user['name']){
            $_SESSION['email']= $user['email'];
           header("Location:../view/home.php");
        }else{
            header("Location:../view/home.php");
        }
       
    }else{
        header("Location:../view/login.php");
    }
}