<?php
    include("../php/connect.php");
    include("../php/header.php");
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/db.css"/>
    <title>Blog Page</title>
</head>
<body>
    <header>
        <div class="bckgd" id="box">
            <?php
                $sql = "SELECT * FROM posts";
                $result = $con->query($sql);
               

                if($result -> num_rows > 0){

                    //output
                    while($row = $result->fetch_assoc()){
                        $id = $row['id'];
                        echo "<h1 class='topic'>".$row['title']."</h1>";
                        echo "\n";
                        echo "<p class='body_part'>". mb_strimwidth($row ['body'],0, 100, '[...]'). "</p>";
                        echo '<a class="read_property" href="post.php?<?php echo $id?>">Read More>></a>';
                    }
            
                    $con->close();
                }
            ?>

            </div>
    </header>
</body>
</html>