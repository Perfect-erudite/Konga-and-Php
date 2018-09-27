<?php
    include("../php/connect.php");  //Create conncetion

    $id = $_GET['id'];
    
    $title = $_POST['title'];
    $body = $_POST['body'];
    $crd = $_POST['created_at'];
    $udt = $_POST['updated_at'];

    $sql = "UPDATE posts SET title = '$title', body = '$body', created_at='$crd', updated_at='$udt' WHERE id ='$id'";
    $result = $con->query($sql);
    if($result){
        echo "Record Updated";
        header('Location: ../php/posts.php?RecordUpdated');        
    }
    else{
        
        echo "Error".$sql."<br>".$con->error;
    }
$con->close();
?>

<?php
    
    //header("Location: ../php/posts.php");

?>