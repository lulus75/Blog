<?php
session_start();
header('Access-Control-Allow-Origin: *');

require_once ('../config/dbconf.php');
require ('../model/ProfilSql.php');

$errors = '';
$updateOk = true;
if(!empty($_SESSION['login'])){


    $tabInfo = [
        $_SESSION['login'],
        $_SESSION['firstname'],
        $_SESSION['lastname'],
        $_SESSION['gender'],
        $_SESSION['birthdate'] ,
        $_SESSION['email'],
        $_SESSION['memberDate']
    ];



    if(!empty($_POST)){

        $userPseudo = trim(htmlspecialchars($_POST['login']));
        $userFirstname = trim(htmlspecialchars($_POST['firstname']));
        $userLastname = trim(htmlspecialchars($_POST['lastname']));
        $userGender = trim(htmlspecialchars($_POST['gender']));
        $userBirthdate = trim(htmlspecialchars($_POST['birthdate']));
        $userMail = trim(htmlspecialchars($_POST['email']));
        $userPassword = trim(htmlspecialchars($_POST['pwd']));
        $passwordConfirm = trim(htmlspecialchars($_POST['pwd2']));
        $passwordActual = trim(htmlspecialchars($_POST['pwdActual']));
        $updateProfil = new Profil();
        if(!isset($userPseudo) || strlen($userPseudo) < 4)
        {
            $errors = 'Your pseudo should have at least 4 characters';
            $updateOk = false;
        }
        if(!isset($userFirstname) || !$userFirstname)
        {
            $errors = 'The firstname field should be filled';
            $updateOk = false;
        }

        if(!isset($userLastname) || !$userLastname)
        {
            $errors = 'The lastname field should be filled';
            $updateOk = false;
        }
        if(!isset($userGender) || !$userGender)
        {
            $errors = 'Please select a gender';
            $updateOk = false;
        }
        if(!isset($userBirthdate) || !$userBirthdate) //ajout
        {
            $errors = 'filled the birthdate field';
            $updateOk = false;
        }
        if(!isset($userMail) || !$userMail)
        {
            $errors = 'Put a valid email';
            $updateOk = false;
        }
        if(!empty($_POST['pwd'])) {

            $currentPwd = $updateProfil ->getpwd($pdo);

            if (!isset($userPassword) || strlen($userPassword) < 6) {
                $errors = ' You need to have 6 chars in your password';
                $updateOk= false;
            }
            if (!isset($passwordConfirm) || ($passwordConfirm != $userPassword)) {
                $errors = ' Please put the same password';
                $updateOk = false;
            }
            if(!isset($passwordActual) || (sha1($passwordActual) != $currentPwd['password'])){
                $errors = ' Please set Your current password ';
                $updateOk = false;
            }
        }

        if(!$updateOk)
        {
            http_response_code(400);
            echo(json_encode(array('success'=>false, "errors"=>$errors)));
        }
        else
        {
            if(!empty($_POST['pwd'])){
            $_POST['pwd'] = sha1($_POST['pwd']);
            unset($_POST['pwd2']);
                $updateProfil -> updateProfil($pdo);
            }
            else{
                $updateProfil -> updateProfilWithoutPwd($pdo);
            }



            $_SESSION['firstname']=$_POST['firstname'];
            $_SESSION['lastname']=$_POST['lastname'];
            $_SESSION['gender']=$_POST['gender'];
            $_SESSION['birthdate'] = $_POST['birthdate'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['login'] = $_POST['login'];


            echo(json_encode(array('success'=>true, "user"=>$_POST)));
        }
    }
}else{
    header( "refresh:0; url=../view/login.php" );
}