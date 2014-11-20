<?php
    require("../API/loginUser.php");
 
    if(!empty($_POST)) 
    {
        $retVal = loginUser();
    } 
?>