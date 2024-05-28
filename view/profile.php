
<?php

require('../view/partials/navbar.php');
require('../model/connection.php');
$config = require('../model/config.php');

$result = new Connection($config);
$user = $result->getUserByEmail($_SESSION['email']);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    
 
    <h5><a href="/view/editprofile.php?id=<?php echo$user['id'] ?>">Edit Profile</a></h1>
</div>
    
<div class="profile">
    <?php
    
    $template = "
               <img src={$user['profile']}>\n
                 <h1>{$user['name']}</h1>   \n
                 <h6>{$user['email']}</h6>   \n
    ";

    echo($template);
    
    ?>
</div>



</body>
</html>