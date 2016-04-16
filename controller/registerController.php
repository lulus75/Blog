<?php
header('Access-Control-Allow-Origin: *');

require_once ('../config/dbconf.php');
require ('../model/RegisterSql.php');

$errors = array();
$isFormGood = true;

$userPseudo = trim(htmlspecialchars($_POST['username']));
$userFirstname = trim(htmlspecialchars($_POST['firstname']));
$userLastname = trim(htmlspecialchars($_POST['lastname']));
$userGender = trim(htmlspecialchars($_POST['gender']));
$userBirthdate = trim(htmlspecialchars($_POST['birthdate']));
$userMail = trim(htmlspecialchars($_POST['email']));
$userPassword = trim(htmlspecialchars($_POST['pwd']));
$passwordConfirm = trim(htmlspecialchars($_POST['pwd2']));

    if(!empty($_POST))
    {
        $new = new Register();

        $result = $new->checkSet($pdo);


        if(!isset($userPseudo) || strlen($userPseudo) < 4)
        {
            $errors['pseudo'] = ' Your pseudo should have at least 4 characters';
            $isFormGood = false;
        }

        foreach($result as $verif){
            if($verif[0] == $userPseudo){
                $errors['pseudo'] = ' Login already taken';
                $isFormGood = false ;
            }
        }

        if(!isset($userFirstname) || !$userFirstname) //ajout
        {
            $errors['firstname'] = ' The firstname field should be filled';
            $isFormGood = false;
        }

        if(!isset($userLastname) || !$userLastname) //ajout
        {
            $errors['lastname'] = ' The lastname field should be filled';
            $isFormGood = false;
        }
        if(!isset($userGender) || !$userGender) //ajout
        {
            $errors['gender'] = ' Please select a gender';
            $isFormGood = false;
        }
        if(!isset($userBirthdate) || !$userBirthdate) //ajout
        {
            $errors['birthdate'] = ' filled the birthdate field';
            $isFormGood = false;
        }
        if(!isset($userMail) || !$userMail)
        {
            $errors['email'] = ' Put a valid email';
            $isFormGood = false;
        }
        foreach($result as $verif){
            if($verif[1] == $userMail){
                $errors['email'] = ' You have already an account';
                $isFormGood = false ;
            }
        }

        if(!isset($userPassword) || strlen($userPassword) < 6)
        {
            $errors['pwd'] = ' You need to have 6 chars in your password';
            $isFormGood = false;
        }
        if(!isset($passwordConfirm) || ($passwordConfirm != $userPassword) )
        {
            $errors['pwd2'] = ' Please put the same password';
            $isFormGood = false;
        }

        if(!$isFormGood)
        {
            http_response_code(400);
            echo(json_encode(array('success'=>false, "errors"=>$errors)));
        }
        else
        {

            $_POST['pwd'] = sha1($_POST['pwd']);
            unset($_POST['pwd2']);
            $new -> valid($pdo);

            echo(json_encode(array('success'=>true, "user"=>$_POST)));
        }
    }

else
{
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
}