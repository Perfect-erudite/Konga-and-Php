
<?php
    $con = new mysqli("localhost", "root", "", "babe");
    //check connection
    if($con -> connect_error){
        die ("Failed to connect". $con->connect_error());
    }

    //echo md5("Ayomide");
?>