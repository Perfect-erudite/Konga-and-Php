<?php
include("../php/connect.php");

   $title = $_POST['title'];
   $body = $_POST['body'];
   $crd = $_POST['created_at'];
   $udt = $_POST['updated_at'];

//    $sql = "INSERT INTO posts(title, body) VALUES('$title', '$body')";
//    $result = $con->query($sql);

$sql = "INSERT INTO posts(title, body, created_at, updated_at) VALUES('$title', '$body', '$crd', '$udt')";
$result = $con->query($sql);

if($result){
    echo "Insertion Successful";
}else{
    echo "Error ".$sql."<br>".$con->error;
}

header('Location: ../php/posts.php');

$con->close();
?>