<?php
session_start();
require('../model/connection.php');
$config = require('../model/config.php');

if(isset($_POST['submit'])||isset($_POST['Add'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
   $encripted = md5($password);
    // $cpassword = $_POST['cpassword'];

    $con= new Connection($config);
    $con->insert($name,$email,$encripted);
    $_SESSION['name']=$name;
   
if(!$_POST['Add']){
    if($email=='sathishksdckap@gmail.com' ){
        $_SESSION['email']= $email;
       header("Location:../view/home.php");
    }else{
        header("Location:../view/home.php");
    }
}else{
    header("Location:../view/setting.php");
}
        
}