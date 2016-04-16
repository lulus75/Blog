<?php
global $config;
$pdo = new PDO($config['host'], $config['user'], $config['password']);

class Register{

public function valid($pdo)
{
    $req = $pdo->prepare("INSERT INTO users SET login = :login, password = :password, firstname = :firstname,
                          lastname = :lastname, birthdate = :birthdate,gender = :gender ,email = :email, memberDate = NOW()");
    $req->bindParam("login", $_POST['username']);
    $req->bindParam("password", $_POST['pwd']);
    $req->bindParam("firstname", $_POST['firstname']);
    $req->bindParam("lastname", $_POST['lastname']);
    $req->bindParam("birthdate", $_POST['birthdate']);
    $req->bindParam("gender", $_POST['gender']);
    $req->bindParam("email", $_POST['email']);
    $req->execute();


}

    public  function checkSet($pdo){
        $req = $pdo->query("SELECT login,email FROM users");
        $result = [];
        foreach($req as $row){
            $result[] = $row;
        }
        return $result;
    }
}