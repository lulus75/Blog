<?php
global $config;
$pdo = new PDO($config['host'], $config['user'], $config['password']);

class NewArticle{

    public function validNewArticle($pdo){
        $req = $pdo->prepare('INSERT INTO articles SET title = :title, content = :content');
        $req->bindParam('title', $_POST['title']);
        $req->bindParam('content', $_POST['content']);
        $req->execute();
    }
}