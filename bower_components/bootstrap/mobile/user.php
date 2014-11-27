<?php

    require ( "../API/loginUser.php" );
    require ( "../API/registerUser.php" );

    $success = false;

    if ( !empty ( $_POST ) ) 
    {
        switch ( $_POST['method'] ) {
 
            case "login" :
                $retVal = loginUser ( );     // returns a string "success" or "fail"
                break;
            
            case "register" :
//                $retVal = registerUser();
//               if ($retVal) {
//                    $success = true;
//                }
                break;
            
            default:
                $retVal = "Error";
                break;
        }
    }
   $response['login'] = $retVal;
   echo ( json_encode($response) );
?>
