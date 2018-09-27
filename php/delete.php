<?php
        include("../php/connect.php");
        // include("../php/post.php");
        
        if(isset($_GET['del'])){
            $id = $_GET['del'];
            $sql = "DELETE FROM posts WHERE id = '$id' ";
            $result = $con->query($sql);
            // echo "<meta http-equiv='refresh' conten= '0;url=posts.php'>";
            header('Location: ../php/posts.php');        }
?>
