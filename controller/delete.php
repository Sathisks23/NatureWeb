<?php
session_start();
require('../model/connection.php');
$config = require('../model/config.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete = new Connection($config);
    $trash = $delete->Delete($id);
    header("Location:../view/setting.php");
}



