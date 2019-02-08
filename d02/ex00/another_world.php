#!/usr/bin/php
<?php

	$line = $argv[1];
	echo preg_replace("/\s{2,}/",' ', trim($line))."\n";
