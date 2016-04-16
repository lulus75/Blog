<?php
global $config;
$pdo = new PDO($config['host'],$config['user'],$config['password']);

class login{

    function checkLogin($pdo){
$stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login");
$stmt->bindParam("login", $_POST['login']);
$stmt->execute();
        return $result = $stmt ->fetch();
    }
}