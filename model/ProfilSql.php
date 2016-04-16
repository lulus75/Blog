<?php
global $config;
$pdo = new PDO($config['host'], $config['user'], $config['password']);

class Profil{
    public function updateProfil($pdo){
        $req = $pdo->prepare("UPDATE users SET login = :login, firstname = :firstname,
                          lastname = :lastname, birthdate = :birthdate,gender = :gender ,email = :email, password = :password WHERE id = :id");
        $req->bindParam("login",$_POST['login']);
        $req->bindParam("id",$_SESSION['id']);
        $req->bindParam("password",$_POST['pwd']);
        $req->bindParam("firstname",$_POST['firstname']);
        $req->bindParam("lastname",$_POST['lastname']);
        $req->bindParam("birthdate",$_POST['birthdate']);
        $req ->bindParam("gender",$_POST['gender']);
        $req->bindParam("email",$_POST['email']);
        $req->execute();


    }

    public function updateProfilWithoutPwd($pdo){
        $req = $pdo->prepare("UPDATE users SET login = :login, firstname = :firstname,
                          lastname = :lastname, birthdate = :birthdate,gender = :gender ,email = :email WHERE id = :id");
        $req->bindParam("login",$_POST['login']);
        $req->bindParam("id",$_SESSION['id']);
        $req->bindParam("firstname",$_POST['firstname']);
        $req->bindParam("lastname",$_POST['lastname']);
        $req->bindParam("birthdate",$_POST['birthdate']);
        $req ->bindParam("gender",$_POST['gender']);
        $req->bindParam("email",$_POST['email']);
        $req->execute();


    }

    public function getpwd($pdo){
        $req = $pdo->prepare("SELECT password FROM users WHERE id = :id");
        $req->bindParam("id",$_SESSION['id']);
        $req->execute();
        return $pwd = $req -> fetch();


    }

}