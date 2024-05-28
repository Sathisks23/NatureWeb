
<?php
        session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link href='/view/src/style.css' rel='stylesheet'>
</head>
<body>
    
<nav>
    <a href=""><h1>Nature Web</h1></a>

    <ul>
        <li><a href="/view/home.php">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="/view/profile.php">profile</a></li>
       <?php
        if (isset($_SESSION['email'])=='sathishksdckap@gmail.com') {
                echo("<li><a href='/view/setting.php'>settings</a></li>");
        }
        ?>

       <li><a href="/view/logout.php">Logout</a></li>


    </ul>
</nav>


</body>
</html>