<?php
    include("../php/connect.php");
    session_start();

    if(isset($_POST['submit'])){
        header("Location: ../php/board.php");
    }

    // <?php echo $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Login page</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/login.css">
    </head>
    <body>
    <!-- The header property -->
        <header class="header_property">
            <p>Nigga</p>
            <img src="../images/myluv.png">
        </header>
        <a  href ="../php/user.php"><button class="signupBtn">SIGN UP</button></a>
        <!-- The Login form in which the user enters their email and password -->
        <form class="container" action='' method='POST'>
            <fieldset class="fieldset_property">
                <p>Enter your details to continue</p>
                <input class="user_input" type="email" name="email" placeholder="Email"><br><br><br><br>
                <input class="user_input" type="password" name="password" placeholder="Password"><br><br><br><br>
                <input type="submit" name="submit" value="Login" class="login-btn" >
            </fieldset>
        </form>

<?php
    include("../php/footer.php");
?>