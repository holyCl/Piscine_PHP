<?php
	$login = $_POST["login"];
	$old_pw = $_POST["old_pw"];
	$new_pw = $_POST["new_pw"];
	$old_ph = $_POST["old_ph"];
	$new_ph = $_POST["new_ph"];
	if ($_POST['submit'] == 'OK' && $login && (($old_pw && $new_pw) || ($old_ph && $new_ph)))
	{
		if (!(file_exists("files/users")))
			mkdir("files/users");
		$oldpw = hash("whirlpool", $old_pw);
		$newpw = hash("whirlpool", $new_pw);
		$unser = unserialize(file_get_contents("files/users"));
		foreach ($unser as $k => $i)
		{
			if ($i['login'] == $login && $i['pw'] == $oldpw)
				$unser[$k]['pw'] = $newpw;
			if ($i['login'] == $login && $i['phone'] == $old_ph)
				$unser[$k]['phone'] = $new_ph;
			file_put_contents('files/users', serialize($unser));
			header("Location:index.php") ;
			exit ;
			}
		}
	else{
		header("Location:index_modify.php?modify=success") ;
		exit ;
	}
?>
