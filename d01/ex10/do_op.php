#!/usr/bin/php
<?php
	if ($argc == 4){
	$first_ar = intval(trim($argv[1]));
	$oper = trim($argv[2]);
	$last_ar = intval(trim($argv[3]));
	if ($last_ar == 0 && ($oper == '/' || $oper =='%')){
		exit(1);
	}
	if ($oper == '*')
		echo $first_ar * $last_ar;
	if ($oper == '+')
		$res =  $first_ar + $last_ar;
	if ($oper == '-')
		$res = $first_ar - $last_ar;
	if ($oper == '/')
		$res = $first_ar / $last_ar;
	if ($oper == '%')
		$res = $first_ar % $last_ar;
	 echo $res;
	}
	else 
		echo "Incorrect Parameters"
?>