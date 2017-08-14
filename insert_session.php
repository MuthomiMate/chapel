<?php
require_once 'functions.php';
$db = new functions();
//$regNo=$_POST['regNo'];


	$name=$_POST['name'];
	$db->addSession($name);
	