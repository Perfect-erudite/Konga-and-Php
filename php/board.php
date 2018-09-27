<?php
        include("../php/connect.php");
        include("../php/function.php");
        session_start();

        if(isset($_SESSION['name'])){
            $user = getUser(getId($_SESSION['name']));
        }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Login page</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/board.css">
        
    </head>
    <body>
        <header class="header_property">
            <p>Nigga</p>
            <img src="../images/myluv.png">
        </header>
        <section class="board-container">
        <div class ="col-4">
        <div style="text-align: center border: 500px; border-radius: 500px border-color: black;">
            <br><br>
            <div class="backg-image">
                <img src="../images/Reggie.png" style="width: 90%; height: auto;">
            </div>
            <img src="../images/Reggie.png" class="image-rot"
                 style="width: 90%; height: auto; border: 10px solid  rgb(182, 180, 180); border-radius: 500px; padding: 2px;">
            <br><br>

            <?php
                echo $user['name'];
                
            ?>
            
        </div>
        </div>
        <button class="logout_btn"><a href="../php/logout.php">Logout</a></button>
        </section>
<?php
    include("../php/footer.php");
?>