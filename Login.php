<?php
require_once 'functions.php';
$db = new functions();
$username=$_POST['email'];
$password=$_POST['password'];
$value=$db->validateAdmin($username,$password);
if($value){
	session_start();
	$_SESSION['admin']=$username; 
	var_dump($_SESSION['admin']);
	header('Location: select.php');
}else{
	 echo '<script language="javascript">';
        echo 'alert("Wrong password or Username"); location.href="gh.php"';
        echo '</script>';
 }
