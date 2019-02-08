#!/usr/bin/php
<?php
$value = $argv[1];
	$value = explode(' ', preg_replace('/ +/', ' ', trim($value)));
	foreach ($value as $i => $val) {
	 	if ($i > 0){
	 		echo $val = $val . " ";
	 	}
	 }
	 echo $value[0] . "\n";
?>