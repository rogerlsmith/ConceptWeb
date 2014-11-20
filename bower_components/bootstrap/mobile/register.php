<?php
    require("../API/registerUser.php");
 
    if(!empty($_POST)) 
    {
        $retVal = registerUser();
    } 
?>
