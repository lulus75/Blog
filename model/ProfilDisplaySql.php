<?php
global $config;
$pdo = new PDO($config['host'],$config['user'],$config['password']);
class ProfilDisp{
    function idDisplay($pdo){
        $req = $pdo->query("SELECT id, login FROM users");
        $result = [];
        foreach($req as $row){
            $result[] = $row;
        }
        return $result;
    }

    function profilMemberDisplay($pdo){
        $req = $pdo->prepare("SELECT login,memberDate, firstname, lastname,gender,birthdate,email FROM users WHERE id = :id");
        $req -> bindParam('id', $_GET['id']);
        $req -> execute();
        return $getInfo = $req -> fetch(PDO::FETCH_ASSOC);
    }


    function loginDisplay($pdo){
        $req = $pdo->prepare("SELECT login FROM users WHERE id = :id");
        $req -> bindParam('id', $_GET['id']);
        $req -> execute();
        return $getInfo = $req -> fetch(PDO::FETCH_ASSOC);
    }

    function memberDateDisplay($pdo){
        $req = $pdo->prepare("SELECT memberDate FROM users WHERE id = :id");
        $req -> bindParam('id', $_GET['id']);
        $req -> execute();
        return $getInfo = $req -> fetch(PDO::FETCH_ASSOC);
    }

    function firstnameDisplay($pdo){
        $req = $pdo->prepare("SELECT firstname FROM users WHERE id = :id");
        $req -> bindParam('id', $_GET['id']);
        $req -> execute();
        return $getInfo = $req -> fetch(PDO::FETCH_ASSOC);
    }

    function lastnameDisplay($pdo){
        $req = $pdo->prepare("SELECT lastname FROM users WHERE id = :id");
        $req -> bindParam('id', $_GET['id']);
        $req -> execute();
        return $getInfo = $req -> fetch(PDO::FETCH_ASSOC);
    }

    function genderDisplay($pdo){
        $req = $pdo->prepare("SELECT gender FROM users WHERE id = :id");
        $req -> bindParam('id', $_GET['id']);
        $req -> execute();
        return $getInfo = $req -> fetch(PDO::FETCH_ASSOC);
    }

    function birthdateDisplay($pdo){
        $req = $pdo->prepare("SELECT birthdate FROM users WHERE id = :id");
        $req -> bindParam('id', $_GET['id']);
        $req -> execute();
        return $getInfo = $req -> fetch(PDO::FETCH_ASSOC);
    }

    function emailDisplay($pdo){
        $req = $pdo->prepare("SELECT email FROM users WHERE id = :id");
        $req -> bindParam('id', $_GET['id']);
        $req -> execute();
        return $getInfo = $req -> fetch(PDO::FETCH_ASSOC);
    }
}