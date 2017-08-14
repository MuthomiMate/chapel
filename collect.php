<?php
require_once 'functions.php';
$db = new functions();
//$regNo=$_POST['regNo'];

if (isset($_POST['submit'])) {
	//session_start();
		$name=$_POST['name'];
$regNo=$_POST['regNo'];
$session=$_POST['session'];
$program=$_POST['program'];
$date=$_POST['selected_date'];
        $signature=$_POST['status'];
$value=$db->validateStudentDetails($name,$regNo,$program,$date,$signature,$session);
if ($value==true) {
		 echo '<script language="javascript">';
        echo 'alert("Details inserted Sucessfully"); location.href="test.php"';
        echo '</script>';
	}
//  session_start();
//  $_SESSION['sucess']='me';
// $sucess=$_SESSION['sucess'];
// echo "Data submitted sucessfully";
// header('Location: test.php');
}else{
	echo "login first";
}