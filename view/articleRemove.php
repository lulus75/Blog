<?php
require_once('../controller/articleListController.php');
require_once('../view/header.php');
?>

    <title>MyBlog | Article Détail</title>
    <link rel="stylesheet" href="../public/css/articleDetail.css">
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
    <h1 class="titlePage">[ Détail de l'article ]</h1>

    <table class="articleDetailTable" rules="all">
        <tr>
            <th class="titleTable">Titre</th>
            <th class="titleTable">Date</th>
        </tr>
        <tr>
            <?php if(isset($_GET['id'])) {
                foreach ($articleDetail as $login){
                    $articleDetail = $login;
                    echo('<td>'.$articleDetail.'</td>');
                }
            }
            ?>

            <td class="actionDisplayNone">
                <a <?php echo ('href="../controller/articleRemoveController.php?articleRemove='. $_GET['id'] .'&author='.$_GET['author']. '"> Supprimer'); ?> </a>
            </td>

            <td class="actionDisplayNone">
                <a <?php echo ('href="./articleEdit.php?id=' . $_GET['id'] .'&author='.$_GET['author'].'"> MODIFIER');?> </a>
            </td>
        </tr>
    </table>

    <table class="articleDetailTable">
        <tr>
            <th class="titleTable">Action n°1</th>
            <th class="titleTable">Action n°2</th>
        </tr>
        <td>
            <a class="articleUrl" <?php echo ('href="./articleEdit.php?id=' . $_GET['id'] .'&author='.$_GET['author'].'"> Modifier');?> </a>
        </td>

        <td>
            <a class="articleUrl" <?php echo ('href="../controller/articleRemoveController.php?articleRemove='.$_GET['id'] . '"> Supprimer'); ?> </a>
        </td>
    </table>

<!-- <a class="articleUrl back" href="../view/articleList.php">Revenir à la liste des articles</a> -->

<?php require_once ('../view/footer.php');?>