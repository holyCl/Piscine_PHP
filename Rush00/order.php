<?php 
 session_start();

 if (!isset($_SESSION['orders']))
 	$_SESSION['orders'] = [];

 if (isset($_POST['submit'])) {
 	$_SESSION['orders'][] = [
 		'actor' => $_POST['actor'],
 		'price' => $_POST['price'],
 	];
 }
 header('Location: index.php');