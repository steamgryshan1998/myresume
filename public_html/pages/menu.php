<?php
session_start();//нужно прописывать в начале каждого php файла чтобы запускалась
?>
<div class="navbar">
    <div class = "align_content">
    <div class = "nav_button">
        <a href="?tab=resume">Resume</a>
    </div>
    <?php
    if(isset($_SESSION["name"]))
    {
    ?>
    <div class="nav_button">
        <a href="?tab=form">Form</a>
    </div>
    <div class="nav_button">
        <a href="#">Start</a>
    </div>
    <div class="nav_button">
        <a href="#">Icons</a>
    </div>
    <div class="nav_button">
        <a href="#">Docs</a>
    </div>
    <div class="nav_button">
        <a href="#">Support</a>
    </div>
    <div class="nav_button">
        <a href="?tab=input_resume">Input</a>
    </div>
    <?php
        }
        if(!isset($_SESSION["name"]))
        {
    ?>
        <div class="nav_button">
            <a href="?tab=login">Login</a>
        </div>
        <div class="nav_button">
           <a href="?tab=registration">Sign in</a>
        </div>
    <?php
       }
    ?>
    <div>
        <?php
        include "../functionality/input_login.php";
        $array = $_SESSION["name"];
        if(isset($_SESSION["name"])) {
        ?>
            Welcome <?php echo $array["name"]; ?>. Click here to <a href="../functionality/logout.php">Logout.</a>
            <?php
            }else echo "<h5>Please login first!</h5>";
            ?>
    </div>
    </div>
</div>
