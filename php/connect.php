
<?php
    $con = new mysqli("localhost", "root", "", "blog");
    //check connection
    if($con -> connect_error){
        die ("Failed to connect". $con->connect_error());   //if the connection is not established then it should throw an error
    }

    //echo md5("Ayomide");
?>