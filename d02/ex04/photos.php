#!/usr/bin/php
<?php
	 
	if ($argc != 2)
	 	exit();
	$url = $argv[1];
	$ch = curl_init($url);
	$hostname = parse_url($url, PHP_URL_HOST);
	if (file_exists($hostname)){
		$dir = opendir($hostname);
		while($file = readdir($dir)){
			if($file  != '.' && $file != '..')
				unlink($hostname . "/" . $file);
		}
		closedir($dir);
		rmdir($hostname);
	}
	mkdir($hostname);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$html = file_get_contents($url);
	preg_match_all('#img.*src\s*=\s*\"([^\"]*\/([^\"]*))\"#im', $html, $images);
	for ($i=0; $i < count($images[1]); $i++) { 
		$ch = curl_init($images[1][$i]);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$img = curl_exec($ch);
		file_put_contents($hostname . "/" . $images[2][$i], $img);
	}
?>