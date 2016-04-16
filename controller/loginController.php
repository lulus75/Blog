<?php
require_once('../config/dbconf.php');
require_once('../model/LoginSql.php');
session_start();

$errormessage = '';
$isFormGood = true;
if(isset($_SESSION['login'])) {
    header("location: ../public/index.php");
    exit;
}else{
    if(isset($_POST['login'])) {
        $test = new login();
        $result = $test->checkLogin($pdo);

        if ($result === false) {
            $errormessage = "Wrong username";
            $isFormGood = false;

        } elseif (empty($_POST["password"])) {
            $errormessage = "No password";
            $isFormGood = false;

        } elseif (sha1($_POST["password"]) != $result["password"]) {
            $errormessage = "Wrong password";
            $isFormGood = false;

        }
        else{
            session_start();


            $_SESSION['firstname']=$result['firstname'];
            $_SESSION['lastname']=$result['lastname'];
            $_SESSION['gender']=$result['gender'];
            $_SESSION['birthdate'] = $result['birthdate'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['login'] = $result['login'];
            $_SESSION['memberDate'] = $result['memberDate'];
            $_SESSION['id'] = $result['id'];


        }
        if(!$isFormGood)
        {
            http_response_code(400);
            echo(json_encode(array('success'=>false, "errors"=>$errormessage)));
        }
        else
        {

            $_POST['password']=sha1($_POST['password']);
            echo(json_encode(array('success'=>true, "user"=>$_POST)));
        }
    }

}

?>
