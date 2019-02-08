#!/usr/bin/php
<?php
if ($argc == 2){
	function error() {
		echo "Syntax Error\n";
		exit(1);
	}
	$arg = str_replace(' ', '', trim($argv[1]));
	if (strpos($arg, '+') !== false)
		$operator_symbol = '+';
	else if (strpos($arg, '-') !== false)
		$operator_symbol = '-';
	else if (strpos($arg, '*') !== false)
		$operator_symbol = '*';
	else if (strpos($arg, '/') !== false)
		$operator_symbol = '/';
	else if (strpos($arg, '%') !== false)
		$operator_symbol = '%';
	else
		error();
	$arg = explode($operator_symbol, $arg);
	if (count($arg) != 2 || !is_numeric($arg[0]) || !is_numeric($arg[1]))
		error();
	if ($arg[1] == 0 && in_array($operator_symbol, ['/', '%']))
		exit(1);
	switch ($operator_symbol) {
		case '+':
			echo  $arg[0] + $arg[1] . "\n";
			break;
		case '-':
			echo  $arg[0] - $arg[1] . "\n";
			break;		
		case '*':
			echo  $arg[0] * $arg[1] . "\n";
			break;
		case '/':
			echo  $arg[0] / $arg[1] . "\n";
			break;
		case '%':
			echo  $arg[0] % $arg[1] . "\n";
			break;
		default:
			exit(1);	
	}
	}else{
	echo "Incorrect Parameters";
}
?>