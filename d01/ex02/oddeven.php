#!/usr/bin/php
<?php

$fd = fopen("php://stdin", "r");
while(1){
	echo "Enter a number: ";
	$line = fgets($fd);
	if (!$line)
		break;
	$nbr = trim($line);
	if (is_numeric($nbr)){
		if ($nbr % 2 == 0){
			echo "The number $nbr is even\n";
		} else {
			echo "The number $nbr is odd\n";
		}
	} else {
		echo "'$nbr' is not a number\n";
	}
}
echo "\n";
?>