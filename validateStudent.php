<?php
require_once 'functions.php';
$db = new functions();
$email=$_POST['email'];
$regNo=$_POST['password'];
$value=$db->validateStudent($email,$regNo); 
	if($value){
		$db->getStudent($regNo); 
	header('Location: mimi.php');
	session_start();
	$_SESSION['stud']=$regNo;

	
}else{
	 echo '<script language="javascript">';
        echo 'alert("Wrong password or Username"); location.href="stud.php"';
        echo '</script>';
 }
