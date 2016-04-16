<?php
session_start();
require_once ("../config/dbconf.php");
require_once ("../model/articles.php");
require_once("../model/commentarySql.php");

if (isset($_GET['articleRemove']) && ($_SESSION['login'] == $_GET['author'])) // Si l'on demande de supprimer une news.
{
    $remove = new RemoveArticle();


    $_GET['articleRemove'] = addslashes($_GET['articleRemove']);
    $remove -> removeAnArticle($pdo);
    $remove->removeCommentaryLinkToArticle($pdo);
    header('location: ../controller/articleRemoveController.php');
}
echo("Article delete with success");
header("Refresh:2; url=../public/index.php");



