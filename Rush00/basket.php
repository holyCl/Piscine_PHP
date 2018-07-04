<?php
session_start();
if (!isset($_SESSION['orders']))
 	$_SESSION['orders'] = [];

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="basket.css">
	</head>
	<body>
		<header>
			<center>
				Корзина
			</center>
		</header>
		<div class="wrap">
			<div class="all">
		<div class="menu">
			<a  href="index.php"><img class="item" src="http://s1.iconbird.com/ico/2014/1/633/w512h5121390856920buy512.png"></a>
		</div>
			<div class="blocks_inf">
				<div class="item1">
					номер
				</div>
				<div class="item1">
					актер
				</div>
				<div class="item1">
					цена
				</div>
			</div>
			<?php foreach ($_SESSION['orders'] as $index => $order): ?>
				<div class="blocks_inf">
					<div class="item1">
						<?php echo $index + 1; ?>
					</div>
					<div class="item1">
						<?php echo $order['actor']; ?>
					</div>
					<div class="item1">
						<?php echo $order['price']; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<footer>
			<hr>
			<p align="right"> &#169; ollevyts ivoloshi 2018</p>
		</footer>
	</body>
</html>
