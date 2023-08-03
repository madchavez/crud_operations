<?php
session_start();
$_SESSION["login"] = 0;

if($_SESSION["login"] == 0){
	header("location:login.php");
}
?>