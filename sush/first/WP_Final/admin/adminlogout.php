<?php
session_start();
	unset($_SESSION['username']);
	session_destroy();
session_unset();
$welcome="admin_login.php";
header('Location: '.$welcome);
?>