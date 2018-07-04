#!/usr/bin/php
<?php
	foreach ($argv as $i => $value) {
		if ($i > 0){
			foreach ($value = explode(' ', preg_replace('/ +/', ' ', trim($value))) as $word) {
				$res .= $word . " ";
			}
		}
	}
	$res = explode(' ', trim($res));
	sort($res);
	foreach ($res as $i => $value) {
		echo ($argc > 1)? $value . "\n" : "";
	}
?>