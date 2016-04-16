<?php
require_once('../controller/articleListController.php');
require_once('../view/header.php');
?>

    <title>My_BLOG | Liste des articles</title>
    <link rel="stylesheet" href="../public/css/articleList.css">
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
    <h1 class="titlePage">[ Listes des articles ]</h1>

    <table class="articleListTable" rules="all">
        <tr>
            <th class="titleTable">Titre de l'article</th>
        </tr>

        <?php foreach($articleTitle as $article) {
            echo('<tr>
                    <td>
                        <a class="articleUrl" href="../view/articleDetail.php?id=' . $article[0].'&author='.$article[2] . '"> ' . $article[1] . ' </a>
                    </td>
                  </tr>');
        }
        ?>
    </table>

<?php require_once ('../view/footer.php');?>