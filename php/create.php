<?php    
    include("../php/header.php");
?>


<div class='page-content'>
    <div class='content-container'>
        <div class='inside-container'>
           
            <form method='POST' action="submit.php">
                <fieldset class="fieldset_property">
                <p style="margin-left:50%;">CREATE A POST </p>
                    <p>Enter Title </p>
                    <input type='text' name='title' placeholder="Title"><br/>
                    <p>Enter Article</p>
                    <textarea name="body" rows="10" cols="50" placeholder="Write here..."></textarea><br>
                    created: <input type='datetime-local' name='created_at'><br>
                    updated: <input type='datetime-local' name='updated_at'><br>                    
                    <input type='submit' name='submit' value='Submit'>
                </fieldset>
            </form>
            <a href="../php/posts.php" style ="margin-left: 97%;">Back</a>
        </div>
    </div>

<?php
    include("../php/footer.php");
?>