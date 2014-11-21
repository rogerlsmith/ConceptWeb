<?php
    require("../API/loginUser.php");
    require("../API/registerUser.php");

    if(!empty($_POST)) 
    {
        switch ( $_POST['method'] ) {
            case "login" :
                $retVal = loginUser();
                break;
            
            case "register" :
                $retVal = registerUser();
                break;
            
            default:
                $retVal = "Error";
                break;
        }
    }
?>
