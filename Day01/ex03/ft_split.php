#!/usr/bin/php
<?php
	function ft_split($line)
	{
		$line = explode(' ', preg_replace('/ +/', ' ', trim($line)));
		sort($line);
		return $line;
	}
?>