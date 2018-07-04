
<?php

function auth($login, $passwd)
{
	$auth = unserialize(file_get_contents("files/users"));
	foreach ($auth as $k => $i)
	{
		if ($i['login'] === $login && $i['pw'] === $passwd)
			return TRUE;
	}
	return FALSE;
}
?>
