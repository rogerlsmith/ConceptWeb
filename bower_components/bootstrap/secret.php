<!-- 
http://untame.net/2013/06/how-to-build-a-functional-login-form-with-php-twitter-bootstrap/
-->
<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>