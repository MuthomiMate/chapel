

						<?php
require_once 'functions.php';
$db = new functions();
$studNo=$_POST['studNo'];
$program=$_POST['program'];
$session=$_POST['status'];
$studsess=$_POST['session'];
if (!empty($studNo)) {
	$value=$db->ViewStud($studNo);
	
} elseif (!empty($studsess)) {
	$value=$db->ViewSession($session, $studsess);
	
}else{
	
	$value=$db->Viewprog($program);
	
}



?>
