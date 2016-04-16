<?php
require_once('../controller/loginController.php');
require_once('../view/header.php')
?>
    <title>Se connecter</title>
    <link rel="stylesheet" href="../public/css/login.css">
    <script src="../controller/ajax/loginAjax.js"></script>
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
<div class="container">
    <h1 class="titlePage">[ Login ]</h1>

    <form class="registerForm">
        Pseudo : <br>
        <input type="text" name="login" placeholder="Pseudo"><br><br>
        Password :<br>
        <input type="password" name="password" placeholder="Password"><br><br>

        <input type="submit" class="button" value="Send">

    </form>

    <div id="errorBloc"></div>
    <div id="successBloc"></div>

    <div class="registerLogin">
        <a class="registerUrl" href="../view/register.php">Register</a>
    </div>
</div>
<?php require_once('../view/footer.php') ?>