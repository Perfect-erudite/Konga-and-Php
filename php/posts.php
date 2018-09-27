<?php
    include("../php/header.php");   //Getting the file that contains the beginning of the html

   
?>

<div class='page-content'>
    <div class='content-container'>
        <button><a href="create.php">Create Post</a></button>
        <div class='inside-container'>
        
            <?php
                $sql = "SELECT * FROM posts";       //Selecting all posts from the posts database table
                $result = $con->query($sql);        //Instructing the query to search the files on the posts table
               

                if($result -> num_rows > 0){        //Checking if the number of rows is greater than 0

                    //output
                    while($row = $result->fetch_assoc()){       //Decalring the row as each result fetched from the database   
                        $id = $row['id'];       //Getting the id(primary key) of each row on the posts table
                    
                        ?>      
                        <div class='col-1'>
                            <img src='../images/px.jpeg'>
                                <?php
                                    echo "<h1 class='topic'>".$row['title']."</h1>";    //Display each title
                                    echo "\n";  //New line
                                    echo "<span class='body_part'>". mb_strimwidth($row ['body'],0, 50, '[...]'). "</span>";    //Display each body with a truncated text
                                    echo "</br>";   //break line
                                    echo "Created Time: <span>".$row['created_at']."</p>";  //Display created time
                                    echo "Update Time: <span>".$row['updated_at']."</span>";    //Display updated time
                                    echo "<br/>";
                                    echo '<a class="read_property" href="post.php?id= '.$id.'"> READ MORE>> </a>';  //Getting the id of each posts to read the full text of the body
                                    echo '<a href ="delete.php?del='.$id.'">DELETE </a>';   //Delete a post
                                    echo '<a href ="edit.php?edit='.$id.'">EDIT</a>';   //Edit a post 
                                    
                                ?>
                        </div>
                        <?php     
                    }
                    $con->close();  //Close connection
                }
            ?>
            
        </div>
    </div>
</div>


        

<?php
    include("../php/footer.php");   //Getting the file containing the end of the html
?>