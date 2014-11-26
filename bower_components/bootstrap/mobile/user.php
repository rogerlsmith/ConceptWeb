<?php

    require("../API/loginUser.php");
    require("../API/registerUser.php");

    $success = false;

    if ( !empty ( $_POST ) ) 
    {
     
        switch ( $_POST['method'] ) {
 
            case "login" :
                $retVal = loginUser();
               if ($retVal) {
                    $success = true;
                }
                break;
            
            case "register" :
 //               $retVal = registerUser();
//               if ($retVal) {
                    $success = true;
//                }
                break;
            
            default:
                $retVal = "Error";
                break;
        }

    }

   
    echo ($success);
?>
