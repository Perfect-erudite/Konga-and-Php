<?php
    include("../php/header.php");
?>

<?php
        $id = $_GET['edit'];
        if(isset($id)){
            //$id =  $_GET['edit'];
            $sql = "SELECT * FROM posts WHERE id= '$id'";
            $result = $con->query($sql);
            
            while($row = $result->fetch_assoc()){
               $title = $row['title'];
               $body = $row['body'];
               $crd = $row['created_at'];
               $udt = $row['updated_at'];
            }
        }  
        //} 
     
    ?>

<div class='page-content'>
    <div class='content-container'>
        <div class='inside-container'>
            
            <form method='POST' action="update.php?id=<?php echo $id; ?>">
                <fieldset class="fieldset_property">
                <p>CREATE A POST </p>
                    <p>Edit Title </p>
                    <input type='text' name='title' placeholder="Title" value="<?php echo $title; ?>"><br/>
                    <p>Edit Article</p>
                    <textarea name='body' rows="10" cols="50"><?php echo $body; ?></textarea><br>
                    Created Time: <input type='text' name='created_at' value = '<?php echo $crd ?>'><br>
                    Updated Time: <input type='text' name='updated_at' value = '<?php echo $udt; ?>'><br>                    
                    <input type='submit' name='submit' value='Update'>
                </fieldset>
            </form>
            <a href="../php/posts.php" style ="margin-left: 97%;">Back</a>
        </div>
    </div>

<?php
    include("../php/footer.php");
?>