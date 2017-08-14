
<?php
require_once 'functions.php';
$db = new functions();
$name=$_POST['name'];
$password=$_POST['password'];
$campus=$_POST['status'];
$db->addAdmin($name,$password,$campus);