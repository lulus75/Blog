<?php
session_start();
require_once('../config/dbconf.php');
require_once('../model/articles.php');
require_once('../model/commentarySql.php');


$article = new ArticleDisp();
$data = $article -> articlePageDisplay($pdo);
$result = new CommentDisplay();
$disp = $result ->displayComment($pdo);
$idCom = $result ->selectCommentId($pdo);




$errors = '';
$isFormGood = true;
//New commentary

if(isset($_POST['commentary'])){
    $new = new Comment();

    if( !isset($_POST['commentary'])|| strlen($_POST['commentary'])<10 ){
        $errors = 'Please make sure your comment is not under 10 chars';
        $isFormGood = false;
    }
    if(empty($_SESSION['login'])){
        $errors=('Connect before post a comment');
        $isFormGood = false;


    }

    if(!$isFormGood) {
        http_response_code(400);
        echo(json_encode(array('success'=>false, "errors"=>$errors)));

    }else{

        $new ->newComment($pdo);
        echo(json_encode(array('success'=>true, "user"=>$_POST)));

    }

}



