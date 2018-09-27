<?php
    include("../php/header.php");   //Getting the file that contains the beginning of the html
    
    

?>

    <?php
        $id =  $_GET['id'];     //Getting the id of the post on the posts table from the database
        $sql = "SELECT * FROM posts WHERE id= '$id'";   //Selecting all properties of a particular row
        $result = $con->query($sql);    //Instructing the query to get the sql work done


        if($result -> num_rows > 0){

             //output
            while($row = $result->fetch_assoc()){
                echo "<h1 class='post_topic'>".$row['title']."</h1>";
                echo "\n";
                echo "<p class='post_body_part'>". $row ['body']. "</p>";
            }
           
        } 
     $con->close();
    ?>

<?php
    include("../php/footer.php");
?>