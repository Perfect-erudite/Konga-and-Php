<?php
    include("../php/connect.php");  //Create Connection
    $email = $_POST['email'];   //Submits the email data to be processed
    $pwd = $_POST['password'];

    //Getting the user's information from the database
    $sql = "SELECT * FROM users where email='$email' AND password='$pwd'";
    $result =$con->query($sql);  //Querying against the database

    //If the user's result fetched fromthe database doesn't match the row
    //Do this
    if(!$row = $result->fetch_assoc()){
        echo "username and password incorrect";
    }
    else{
        echo "You are logged in";
    }

?>