<?php
require_once('../view/header.php');
require_once('../controller/articlespageController.php');
?>

    <title>MyBlog | Article</title>
    <link rel="stylesheet" href="../public/css/accueil.css">
    <script src="../controller/ajax/commentNewAjax.js"></script>
    <script src="../controller/ajax/commentaryRemoveAjax.js"></script>
    <script src="../controller/ajax/commentaryEditAjax.js"></script>
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
                <div class="titleArticles">' . $data[1] . '</a></div>');
        if(isset($_SESSION['login'])) {
            if($_SESSION['login'] == $data[6]){
                echo('<a href="../view/articleDetail.php?id=' . $data[0].'&author='.$data[6] . '""><img src="../images/editimg.png" class="imgEdit"></a><br><br>');
            }}

        echo('

                            <div class="content">' . $data[3] . '</div><br>
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

        echo('<div class="commentary">');

        foreach($idCom as $key){
            if($data[0] == $key[1]){

                echo('<div class="commentBloc" >');
                echo('<p class="commentDisp">' . $key[5] .'</p><br>
                          <span class="commentAuthor">Writed by <div class="authorArticle">' . $key[2] . '</div></span><br>

                ');
                if(isset($_SESSION['login'])) {
                    if ($_SESSION['login'] == $key[2] || $_SESSION['login'] == $data[6]) {
                        echo('
                          <button class="btn" >| Edit |</button>

                          <form class="edit">
                              <textarea  class="contentFormHide" name="commentDisp" style="display: none">' . $key[5] . '</textarea>
                              <input value="Edit comment" type="submit"  class="editComment" style="display: none ">
                              <input type="hidden" name="id" value="' . $key[0] . '">
                          </form>

                        <button class="cancel ">Cancel</button>

                          <form class="deleteComment" >
                           <input type="hidden" name="authorArticle" value="' . $data[6] . '">
                          <input type="hidden" name="id" value="' . $key[0] . '">
                          <input type="submit" value="| Delet |" class="deleteComment deleteBtn"><br>
                          </form>');

                    };
                }
                echo('</div>');
            }
        }?>

        <form class="newComment registerForm" method="POST">
            Write a comment :<br>
            <textarea name="commentary"></textarea><br>
            <input type="hidden" name="id_articles" value="<?php echo($data[0])?>">
            <input type="submit" class="postComment button" value="Post Comment">
        </form>
        <div class="successBloc"></div>
        <div class="errorBloc"></div>
        <?php
        echo('</div>');
    }

    ?>
    </div>
<?php require_once ('../view/footer.php');?>