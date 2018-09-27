<?php
    include("../php/header.php");
?>

<?php
        $id = $_GET['edit'];
        if(isset($id)){
            //$id =  $_GET['edit'];
            $sql = "SELECT * FROM users WHERE id= '$id'";
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


<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>SignUp page</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/user.css">
        
    </head>
    <body>
    <!-- The header property -->
        <header class="header_property">
            <p>Nigga</p>
            <img src="../images/myluv.png">
        </header>
        <!-- The Login form in which the user enters their email and password -->
        <form class="container" action='submit_user.php' method='POST'>
            <fieldset class="fieldset_property">
                <p>Edit account</p>
                <input class="user_input" type="text" name="name" placeholder="Enter name"><br><br><br><br>
                <input class="user_input" type="number" name="age" placeholder="Enter age"><br><br><br><br>
                <input class="user_input" type="text" name="gender" placeholder="Enter gender"><br><br><br><br>
                <input class="user_input" type="email" name="email" placeholder="Enter email"><br><br><br><br>
                <input class="user_input" type="password" name="password" placeholder="Enter password"><br><br><br><br>
                <input class="user_input" type="number" name="contact" placeholder="Enter phone number"><br><br><br><br>                
                Input a picture
                <input type="file" name="picture">
                <!-- <input class="user_input" type="password" name="name" placeholder="Confirm password"><br><br><br><br>                 -->
                <input type="submit" name="submit" value="Create" class="login-btn" >
            </fieldset>
        </form>

<?php
    include("../php/footer.php");
?>