<?php

	exec("~/Library/Containers/MAMP/mysql/bin/mysql -u root -p5956861 < shop.sql");
	$conn = mysqli_connect('localhost', 'root', '5956861', 'shop');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
