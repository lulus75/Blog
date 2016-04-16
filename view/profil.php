<?php

require_once('../controller/profilController.php');
require_once('../view/header.php');

if(empty($_SESSION['login'])){
    header('location: ../controller/profilController.php');
}
?>

    <title>Profil</title>
    <link rel="stylesheet" href="../public/css/profil.css">
    <script src="../controller/ajax/profilAjax.js"></script>
<script src="../lib/plugin/colorChangePlugin/script.js"></script>
<link rel="stylesheet" href="../lib/plugin/colorChangePlugin/techPlugin.css">
</head>
<body>

    <header>
        <div class="title">
            <a class="noStyle" href="../public/" <p class="TitleColorBlue">TECH</p> <p>'</p> <p class="TitleColorGreen">NOW</p> </a>

            <div id="navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <?php
        require_once('../view/navMobile.php');
        require_once('../view/navDesktop.php');
        ?>
    </header>
    <?php
    require_once("../lib/plugin/colorChangePlugin/volet.php");
    ?>
    <h1 class="titlePage">[ Your profile ]</h1>

    <form method="POST" class="registerForm">

        Pseudo : <br>
        <input type="text" name="login" placeholder="pseudo" value="<?php echo($tabInfo[0]) ?>"><br><br>
        FirstName :<br>
        <input type="text" name="firstname" placeholder="Firstname" value="<?php echo($tabInfo[1]) ?>"><br><br>
        SecondName :<br>
        <input type="text" name="lastname" placeholder="Lastname" value="<?php echo($tabInfo[2]) ?>"><br><br>
        Gender :<br><br>

        <?php if( $tabInfo[3]='male')
        {?> <input type="radio" name="gender" value="Male" checked="checked">Male
            <input type="radio" name="gender" value="Female">Female<br><br>
            <?php ;}
        else {
            ?>
            <input type="radio" name="gender" value="Male">Male<br>
            <input type="radio" name="gender" value="Female" checked="checked">Female<br><br><?php ;} ?>


        Birthdate :<br>
        <input type="date" name="birthdate" value="<?php echo($tabInfo[4]) ?>"><br><br>
        Email :<br>
        <input type="email" name="email" placeholder="email" value="<?php echo($tabInfo[5]) ?>"><br><br>
        Password :<br>
        <input type="password" name="pwd"><br>
        Password Confirm :<br>
        <input type="password" name="pwd2"><br>
        Enter your Password to change your password :
        <input type="password" name="pwdActual"><br>
        <input type="submit" class="button" value="Save">

    </form>


<div id="errorBloc"></div>
<div id="successBloc"></div>

<?php require_once('../view/footer.php');?>
