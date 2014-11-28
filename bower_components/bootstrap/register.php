
<?php

    require "API/registerUser.php";
 
    if ( !empty ( $_POST ) ) {
        $retVal = registerUser ( );
        header ( "Location: index.html" ); 
        die ( "Redirecting to index.html" ); 
    } 
?>
