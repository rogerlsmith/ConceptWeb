<?php

    require "../API/loginUser.php" ;
    require "../API/registerUser.php";
    
    $response = array ("login" => "fail", "user" => array("id"=>"-1", "username"=>null,"email"=>null));
    $file = $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/mobile/logfile.txt';

    $postdata = file_get_contents("php://input");

    $data = json_decode ( $postdata );

    if ( !empty ( $data ) ) {

        switch ( $data->method ) {
 
            case "login" :

                $json = loginUser ( $data->username, $data->password );
                $loginObj = json_decode ( $json );
                $response['login'] = $loginObj->{'status'};
                $response['user'] = $loginObj->{'user'};
                
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
