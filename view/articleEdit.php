<?php
require_once('../controller/articleEditController.php');
require_once('../view/header.php');
?>

    <title>Admin | Edition articles</title>
    <link rel="stylesheet" href="../public/css/articleEdit.css">
    <script src="../lib/plugin/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
    <link rel="stylesheet" href="../lib/plugin/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css">
    <script src="../controller/ajax/articleEditAjax.js"></script>
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
    <h1 class="titlePage">[ Modifier l'article ]</h1>

        <form method="POST" class="registerForm">
            <input type='hidden' name="id" value="<?php echo($_GET['id'])?>">

            Titre de l'article : <br>
            <input type="text" name="title" id="editArticle" value="<?php echo($disp[0]) ?>"> <br>

            Description :<br>
            <textarea name="shortContent" ><?php echo($disp[1]) ?></textarea><br>

            Contenu de l'article : <br>
            <textarea name="content" ><?php echo($disp[2]) ?></textarea> <br>

            <input class="none" name="id" value="<?php echo($_GET['id'])?>">

            <input type="submit" class="button" value="Send">
        </form>



        <div id="errorBloc"></div>
        <div id="successBloc"></div>

<?php require_once('../view/footer.php'); ?>