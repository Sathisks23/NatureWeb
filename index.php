<?php

session_start();


if (!isset($_SESSION['name'])) {
    header("Location:view/login.php ");
    exit();
}

require "view/partials/navbar.php";

?>



</BODY>
</HTML>