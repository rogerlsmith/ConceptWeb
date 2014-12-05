<?php

function addAudio ( $user_id, $path, $method ) {
    
    require_once $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/config/config.php';
    
    if ( $user_id ) {
        
        // Add row to database 
        $query = " 
            INSERT INTO audio ( 
                owner,
                path
            ) VALUES ( 
                :owner, 
                :path
            ) 
        ";
       
        $query_params = array( 
            ':owner' => $user_id, 
            ':path' => $path
        );
        try {  
            $stmt = $db->prepare ( $query ); 
            $result = $stmt->execute( $query_params ); 
        } 
        catch ( PDOException $ex ) { die("Failed to run query: " . $ex->getMessage()); } 
    }
}

?>
