<?php
require_once 'functions.php';
$db = new functions();
if ($_POST['submit']) {
	$name=$_POST['name'];
	$regNO= $_POST['regNo'];
	$program= $_POST['program'];
	//$session= $_POST['session'];
	$stud_email=$_POST['Email'];
	$value=$db->insertStudentDetails($name, $regNO,$program,$stud_email);
	if ($value==true) {
		 echo '<script language="javascript">';
        echo 'alert("Student inserted Sucessfully"); location.href="Student.php"';
        echo '</script>';
	}
}