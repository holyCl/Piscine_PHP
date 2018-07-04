#!/usr/bin/php
<?php
	function ft_is_sort($tab){
		$temp = $tab;
		$flag = true;
		sort($tab);
		foreach ($tab as $i => $value) {
			if ($value != $temp[$i])
				$flag = false;
		}
		return $flag;
	}
?>