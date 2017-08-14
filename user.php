<?php
session_start();
if (isset($_SESSION['admin'])) {
	$user=$_SESSION['admin'];
	echo $user;
}