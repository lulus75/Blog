<?php

$errormessage = '';
session_start();
if(empty($_SESSION['login'])){
    $errormessage = 'Vous n\'�tes pas connecter, redirection.';
    echo($errormessage.'<meta http-equiv="refresh" content="2; URL=../view/login.php">');

}
else {
    session_destroy();
    header( "refresh:0; url=../view/login.php" );
}