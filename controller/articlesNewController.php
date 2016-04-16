<?php
require_once('../config/dbconf.php');
require_once('../model/articles.php');
session_start();

$errormessage = '';
$isFormGood = true;

if(isset($_SESSION['login'])){
    if(isset($_POST['title'])) {
        $newArticle = new NewArticle();
        if ((!isset($_POST['title'])) || (strlen($_POST['title']) < 10)) {
            $errormessage = "Vous n'avez pas entrer de titre ...";
            $isFormGood = false;
        }

        if ((!isset($_POST['shortContent'])) || (strlen($_POST['shortContent'])) < 10){
            $errormessage = 'Votre article ne contient pas de description...';
            $isFormGood = false;
        }
        if ((!isset($_POST['content'])) || (strlen($_POST['content'])) < 10){
            $errormessage = 'Votre article ne contient pas de contenu ...';
            $isFormGood = false;
        }

        if(!$isFormGood)
        {
            http_response_code(400);
            echo(json_encode(array('success'=>false, "errors"=>$errormessage)));
        }
        else
        {
            $newArticle ->validNewArticle($pdo);
            echo(json_encode(array('success'=>true, "user"=>$_POST)));
        }
    }

}else{
    header( "refresh:0; url=../view/login.php" );
    exit;
}