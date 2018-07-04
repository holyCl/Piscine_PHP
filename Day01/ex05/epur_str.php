#!/usr/bin/php
<?php
	function ft_split($line)
	{
		$line = explode(' ', preg_replace('/ +/', ' ', trim($line)));
		return $line;
	}
	$line = ft_split($argv[1]);
	foreach ($line as $value) {
		if ($line[0] != $value){
			echo " ";
		}
		echo "$value";
	}
	echo "\n";
?>