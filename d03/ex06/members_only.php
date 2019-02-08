<?PHP
if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys')
{
	$file = base64_encode(file_get_contents("../img/42.png"));
	echo "<html><body>\n";
	echo "Hello Zaz<br />\n";
	echo "<img src='data:image/png;base64,$file'>\n";
	echo "</body></html>\n";
}
else
{
	header("WWW-Authenticate: Basic realm='My Realm'");
	header("HTTP/1.0 401 Unauthorized");
	echo "<html><body>Access denied</body></html>\n";
	exit;
}
?>