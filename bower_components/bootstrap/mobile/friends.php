<?php

    $json = "";
    
    require "../API/showFriends.php" ;
    require "../API/searchFriends.php" ;
    
    if ( !empty ( $_POST ) ) {
        
        switch ( $_POST['method'] ) {
            
            case "show" :
                $json = myFriends ( $_POST['user_id'] );
                break;
            
            case "search" :
                $json = searchFriends ( $_POST['user_id'] );
                break;
            
            default:
                break;
        }
    }
    
    echo $json;
    
?>
