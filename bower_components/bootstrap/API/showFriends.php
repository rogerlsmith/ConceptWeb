<?php

function myFriends ( $id ) {
    
    $path = $_SERVER['DOCUMENT_ROOT'] . "/concept/bower_components/bootstrap/config/config.php";
    require "$path";
    
    $query = " 
        SELECT 
            friend_id
        FROM friends 
        WHERE 
            user_id = :user_id 
    ";
        
    $query_params = array ( 
        ':user_id' => $id 
    ); 

    try { 
        $stmt = $db->prepare ( $query ); 
        $result = $stmt->execute ( $query_params ); 
    } 
    catch ( PDOException $ex ){ 
        die ( "Failed to run query: " . $ex->getMessage ( ) );     
    } 
    
    $friends = $stmt->fetch(); 
    if ( $friends ) {
        $i = 0;
        foreach ( $friends as $friend ) {
            $obj[$i] = $friend;
            $i++;
        }
    }
    
    return ( json_encode( $obj ) );
    
}

?>
