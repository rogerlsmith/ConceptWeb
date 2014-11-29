<?php

function addAudio ( $path ) {
    
    $path = $_SERVER['DOCUMENT_ROOT'] . "/concept/bower_components/bootstrap/config/config.php";
    require "$path"; 
    
    if ( $_SESSION['user']['id'] ) {
        
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
            ':owner' => $_SESSION['user']['id'], 
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
