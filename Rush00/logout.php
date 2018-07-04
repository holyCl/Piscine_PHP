<?php
	session_start();
	$_SESSION['log_user'] = NULL;
	session_destroy();
	header("Location: index.php");
?>
