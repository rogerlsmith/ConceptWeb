<!-- 

    http://untame.net/2013/06/how-to-build-a-functional-login-form-with-php-twitter-bootstrap/

-->

<?php

    require("API/loginUser.php");
 
    if(!empty($_POST)) 
    {
        $row = loginUser();
        if ($row!=null) {
            unset($row['salt']); 
            unset($row['password']); 
            $_SESSION['user'] = $row;
            header("Location: my-messages.php"); 
            die("Redirecting to homepage"); 
        } 
        else{ 
            print("Login Failed."); 
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
?>