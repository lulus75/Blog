<?php
require_once('../config/dbconf.php');
require_once('../model/articles.php');
session_start();
// Article list
$test = new ArticleDisp();

$articleTitle = $test->idDisplay($pdo);
$articleDetail = $test->articleDetailDisplay($pdo);