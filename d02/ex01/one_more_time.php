#!/usr/bin/php
<?php

	$line  = $argv[1];
	if (!$line)
		exit();
	$line = explode(' ', preg_replace('/ +/', ' ', trim($line)));
	array_shift($line);
	$count = count($line);
	if($line[1] == 'Janvier')
		$line[1] = 'January';
	else if($line[1] == 'Fevrier')
		$line[1] = 'February';
	else if($line[1] == 'Mars')
		$line[1] = 'March';
	else if($line[1] == 'Avril')
		$line[1] = 'April';
	else if($line[1] == 'Mai')
		$line[1] = 'May';
	else if($line[1] == 'Juin')
		$line[1] = 'June';
	else if($line[1] == 'Juillet')
		$line[1] = 'July';
	else if($line[1] == 'Aout')
		$line[1] = 'August';
	else if($line[1] == 'Septembre')
		$line[1] = 'September';
	else if($line[1] == 'Octobre')
		$line[1] = 'October';
	else if($line[1] == 'Novembre')
		$line[1] = 'November';
	else if($line[1] == 'Decembre')
		$line[1] = 'December';
	$line1 = implode(' ', $line);
	$time = strtotime($line1);
	if (!$time)
		echo "Wrong Format" . "\n";
	else
		echo $time . "\n";
