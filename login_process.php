<?php
require_once('userClass.php');
session_start();
$nUser = new User();
$user = $_POST['user'];
$pass = $_POST['pass'];

$validLogin = $nUser->credentialCheck($user,$pass);

if($validLogin == true){
	$_SESSION["login"] = 1;
	$_SESSION["user"] = $user;
	header("location:updated_form.php");
	echo "true";
}
else{
	header("location:login.php");
}
?>