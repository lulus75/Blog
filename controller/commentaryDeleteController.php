<?php
require_once ("../config/dbconf.php");
require_once ("../model/commentarySql.php");
require_once ("../model/articles.php");

session_start();
$isGood = true;
$errors = '';



if(!empty($_POST) || isset($_SESSION['login'])){

    $checkDelete = new RemoveComment();
    $log = $checkDelete ->selectIdAuthor($pdo);

    if($_SESSION['login'] == $log[0] || $_GET['authorArticle']){
        $isGood = true;
    }else{

        $errors ='It\'s not your comment !';
        $isGood = false;
    }

    if(!$isGood){
        http_response_code(400);
        echo(json_encode(array('success'=>false, "errors"=>$errors)));
    }else{
        $delete = new RemoveComment();
        $delete ->removeAnComment($pdo);
        echo(json_encode(array('success'=>true, "comment"=>$_GET['id'],$_GET['authorArticle'])));



    }

}