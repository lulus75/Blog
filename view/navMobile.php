<?php
require_once('../view/header.php');
?>

<div class="navigationBar">
    <ul class="navContent">
        <li> <a class="navUrl active" href="#">Home</a></li>
        <?php if(!isset($_SESSION['login'])){
            echo('<li class="noConnect"><a class="navUrl" href="../view/articlesNew.php">Create article</a></li>');
        }else{
            echo('<li><a class="navUrl" href="../view/articlesNew.php">Create article</a></li>');
        }?>

        <li> <a class="navUrl" href="../view/memberList.php">Our members</a></li>

        <?php if(!isset($_SESSION['login'])){
            echo('<li class="noConnect"><a class="navUrl" href="../view/profil.php">Profile</a></li>');
        }else{
            echo('<li><a class="navUrl" href="../view/profil.php">Profile</a></li>');
        };
        if(isset($_SESSION['login'])){
            echo('<li class="noConnect"><a class="navUrl" href="../view/login.php">Sign in</a></li>');
        }else{
            echo('<li><a class="navUrl" href="../view/login.php">Sign in</a></li>');
        };

        if(!isset($_SESSION['login'])){
            echo('<li class="noConnect"><a class="navUrl" href="../controller/logoutController.php">Sign out</a></li>');
        }else{
            echo('<li><a class="navUrl" href="../controller/logoutController.php">Sign out</a></li>');
        };

        if(isset($_SESSION['login'])){
            echo('<li class="noConnect"><a class="navUrl" href="../view/register.php">Register</a></li>');
        }else{
            echo('<li><a class="navUrl" href="../view/register.php">Register</a></li>');
        };
        ?>
        <li> <a class="navUrl options" href="#">Options</a></li>
    </ul>
</div>
