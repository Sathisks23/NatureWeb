<?php
session_start();
require "../view/partials/navbar.php" ;

if (!isset($_SESSION['name'])) {
    header("Location: ../login.php");
    exit();
}


echo("Hello ".$_SESSION['name']);
echo("Hello ".$_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
</body>
</html>

