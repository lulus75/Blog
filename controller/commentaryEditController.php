<?php
require_once ("../config/dbconf.php");
require_once ("../model/commentarySql.php");
session_start();
$isGood = true;
$errors = '';



if(!empty($_POST) || isset($_SESSION['login'])) {

    $test = new RemoveComment();
    $log = $test->selectIdAuthor($pdo);

    if ($_SESSION['login'] != $log[0]) {
        $errors = 'It\'s not your comment !';
        $isGood = false;
    }

    if (!$isGood) {
        http_response_code(400);
        echo(json_encode(array('success' => false, "errors" => $errors)));
    } else {
        $edit = new EditComment();
        $edit->editCommentary($pdo);
        echo(json_encode(array('success' => true, "commentEdit" =>$_POST)));
    }
}