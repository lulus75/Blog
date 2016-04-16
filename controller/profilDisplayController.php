<?php

require_once('../config/dbconf.php');
require_once('../model/ProfilDisplaySql.php');


$profilMember = new ProfilDisp();
$result = $profilMember->idDisplay($pdo);
$info = $profilMember->profilMemberDisplay($pdo);

$log = $profilMember->loginDisplay($pdo);
$mbDate = $profilMember->memberDateDisplay($pdo);
$firstname = $profilMember->firstnameDisplay($pdo);
$lastname = $profilMember->lastnameDisplay($pdo);
$gender = $profilMember->genderDisplay($pdo);
$birthdate = $profilMember->birthdateDisplay($pdo);
$email = $profilMember->emailDisplay($pdo);
