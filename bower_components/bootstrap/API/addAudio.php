<?php

function addAudio ( $user_id, $path, $method ) {
    
    require_once $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/config/config.php';
    
//    $file = $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/mobile/logfile.txt';
//    file_put_contents($file, $method);
    
    if ( $user_id ) {
        
        $private = false;
        if ( $method == 'private' ) {
            $private = true;
        }

        // Add row to database 
        $query = " 
            INSERT INTO audio ( 
                owner,
                path,
                private
            ) VALUES ( 
                :owner, 
                :path,
                :private
            ) 
        ";
       
        $query_params = array( 
            ':owner' => $user_id, 
            ':path' => $path,
            ':private' => $private
        );
        try {  
            $stmt = $db->prepare ( $query ); 
            $result = $stmt->execute( $query_params ); 
        } 
        catch ( PDOException $ex ) { die("Failed to run query: " . $ex->getMessage()); } 
    }
}

?>
