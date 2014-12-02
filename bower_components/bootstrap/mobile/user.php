<?php

    require "../API/loginUser.php" ;
    require "../API/registerUser.php";
    
    if ( !empty ( $_POST ) ) {
        
        switch ( $_POST['method'] ) {
 
            case "login" :
                $json = loginUser ( );
                $loginObj = json_decode ( $json );
                $response['login'] = $loginObj->status;
                $response['user'] = $loginObj->user;
                break;
            
            case "register" :
                $retVal = registerUser ( );
                $response['register'] = $retVal;
                break;
            
            default:
                $retVal = "Error";
                $response['user'] = $retVal;
                break;
        }
    }
   
   echo ( json_encode ( $response ) );
?>
