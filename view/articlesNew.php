<?php
require_once('../controller/articlesNewController.php');
require_once('../view/header.php');
?>

    <title>Créer un article</title>
    <link rel="stylesheet" href="../public/css/profil.css">
    <link rel="stylesheet" href="../lib/plugin/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css">
    <script src="../lib/plugin/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
    <script src="../controller/ajax/articlesNewAjax.js"></script>
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
    <h1 class="titlePage">[ Create an article ]</h1>

    <form method="POST" class="registerForm">
        <Ti></Ti>Title : <br>
            <input type="text" name="title" class="new" placeholder="Entrez le nom de l'article"> <br>
        Description :<br>
        <textarea name="shortContent"></textarea><br>

        Main content : <br>
        <textarea name="content"></textarea> <br>

        <input type="submit" class="button" value="Send">
    </form>

    <div id="successBloc"></div>
    <div id="errorBloc"></div>

<?php require_once('../view/footer.php');?>