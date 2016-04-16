<?php
require_once("../controller/articlesController.php");
require_once('../view/header.php');
?>
    <title>MyBlog | Article</title>
    <link rel="stylesheet" href="../public/css/accueil.css">

    <script src="../controller/ajax/commentNewAjax.js"></script>
    <script src="../controller/ajax/commentaryRemoveAjax.js"></script>
    <script src="../controller/ajax/commentaryEditAjax.js"></script>
    <script src="../public/js/acceuil.js"></script>
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

    <div class="container">

        <?php

        foreach($data as $articleInfo) {
            $data = $articleInfo;

            echo('<div class="articles"><br>
                    <div class="titleArticles"><a class="titleArticlesUrl" href="../view/articlesPage.php?id='.$data[0].'&author='.$data[6].'">' . $data[1] . '</a></div>');

                           echo('
                                <div class="shortContent">' . $data[2] . '</div><br><br>
                                <div class="articlesContent">
                                    <a href="../view/articlesPage.php?id='.$data[0].'&author='.$data[6].'"><button class="readMore" >| Read More |</button></a>
                                </div>
                                <div class="author">Write the ' . $data[4] . ' by ' . '<div class="authorArticle">' .$data[6] . '</div></div>
                                <input type="hidden" name="id" value="'.$data[0].'">');

            $a = count($disp);
            if($a == 0 || $disp[0] == $data[0]){
                echo(' <br><span class="commentNumber"> Comment(0)</span><br><br>');
            }else{
                foreach($disp as $nb) {

                    if ($data[0] == $nb[0]) {
                        echo(' <br><span class="commentNumber"> Comment(' . $nb[1] . ')</span><br><br>');
                    }
                }

            }


            echo('</div>');

            echo('<div class="comment">');

            foreach($idCom as $key){
                if($data[0] == $key[1]){

                    echo('<div class="commentBloc" >');
                    echo('<p class="commentDisp">' . $key[5] .'</p><br>
                              <span class="commentAuthor">Writed by <div class="authorArticle">' . $key[2] . '</div></span><br>

                    ');

                    echo('</div>');
                }
            }?>

            <div class="successBloc"></div>
            <div class="errorBloc"></div>
            <?php
            echo('</div>');
        }

        ?>
    </div>
<?php require_once ('../view/footer.php');?>