<?php
session_start();
require_once('../config/dbconf.php');
require_once('../model/articles.php');
require_once('../model/commentarySql.php');
require_once('../model/profilDisplaySql.php');


$back = new ArticleDisp();
$data = $back ->displayArticle($pdo);
$result = new CommentDisplay();
$disp = $result ->displayComment($pdo);
$idCom = $result ->selectCommentId($pdo);