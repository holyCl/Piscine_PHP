<?php
	session_start();

	include 'auth.php';

	if (auth($_POST['login'], hash("whirlpool", $_POST['pw'])))
	{
		$_SESSION['login_user'] = $_POST['login'];
		var_dump($_SESSION['basket']);
		header("Location: index.php?login=success");
	}
	else
	{
		$_SESSION['login_user'] = "";
		header("Location: index_login.php");
		exit ;
	}
?>
