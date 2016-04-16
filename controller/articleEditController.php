<?php
require_once('../config/dbconf.php');
require_once('../model/articles.php');

session_start();
$errors = array();
$updateOk = true;

$errormessage = '';
$isFormGood = true;

$new = new ArticleDisp();
$disp = $new ->articleEditDisplay($pdo);



 if(isset($_POST['title'])) {
    $new = new ArticleEdit();

    if ((empty($_POST["title"])) || (strlen($_POST['title']) < 10)) {
        $errormessage = "Please put a title or your title is under 10 characters";
        $isFormGood = false;
    }

    if ((empty($_POST["content"])) || (strlen($_POST['content'])) < 100){
        $errormessage = 'Your article is under 100 characters';
        $isFormGood = false;
    }

    if ((empty($_POST["shortContent"])) || (strlen($_POST['shortContent'])) < 30){
        $errormessage = 'Your description is under 30 characters';
        $isFormGood = false;
    }

    if(!$isFormGood)
    {
        http_response_code(400);
        echo(json_encode(array('success'=>false, "errors"=>$errormessage)));
    }
    else
    {
        $new -> updateArticle($pdo);
        echo(json_encode(array('success'=>true, "user"=>$_POST)));

    }

}

