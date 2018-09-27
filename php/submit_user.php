<?php
include("../php/connect.php");

   $name = $_POST['name'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $phone = $_POST['contact'];
   $picture = $_POST['picture'];

   

//    $sql = "INSERT INTO posts(title, body) VALUES('$title', '$body')";
//    $result = $con->query($sql);

$sql = "INSERT INTO users(name, age, gender, email, password, contact, picture) VALUES('$name', '$age', '$gender', '$email', '$password', '$phone', '$picture')";
$result = $con->query($sql);

if($result){
    echo "Insertion Successful";
}else{
    echo "Error ".$sql."<br>".$con->error;
}

header('Location: ../php/Login.php?AccountCreatedSuccessfully');

$con->close();
?>