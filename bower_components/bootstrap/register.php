<!-- 

    http://untame.net/2013/06/how-to-build-a-functional-login-form-with-php-twitter-bootstrap/

-->

<?php 
    require("API/registerUser.php");

    if(!empty($_POST)) 
    { 
        registerUser();
        header("Location: index.html"); 
        die("Redirecting to index.html"); 
    } 
?>
