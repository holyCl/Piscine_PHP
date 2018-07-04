<?php

include 'auth.php';

$login = $_POST["login"];
$passwd = $_POST["pw"];
$fname = $_POST["fname"];
$sname = $_POST["sname"];
$phone = $_POST["phone"];

if ($_POST["submit"] === "OK")
{
	if ($login && $passwd)
	{
		if (!(file_exists("files")))
			mkdir("files");
		$unser = unserialize(file_get_contents("files/users"));
		foreach ($unser as $i)
		{
			if ($i["login"] === $login)
			{
				header("Location:index_create.php");
				exit ;
			}
		}
		$arr = array('login' => $login, 'pw' => hash('whirlpool', $passwd), 'first_name' => $fname,'surname' => $sname, 'phone' => $phone);
		$unser[] = $arr;
		file_put_contents('files/users', serialize($unser));
		header("Location:index_login.php") ;
	}
	else
	{
		header("Location:index_create.php");
		exit ;
	}
}
else
{
	header("Location:index_create.php");
	exit ;
}
?>
