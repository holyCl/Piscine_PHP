<?php
session_start();
$name = array("Дженсен Эклз","Райан Рейнольдс","Джеймс Макэвой","Шерлок Холмс","Крис Хемсворт","Элизабет Олсен","Черная Вдова","Галь Гадот","Марго Робби","Кира Найтли");
$price = array("1000$","4200$","800$","1500$","2500$","1500$","???","3500$","1000$","1900$");

	 var_dump($_SESSION);
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

				<div class="blocks">
					<div class="item1">
						номер
					</div>
					<div class="item1">
						актер
					</div>
					<div class="item1">
						цена
					</div>
					<div class="item1">
						Кол-во
					</div>

				</div>
			</div>
		</div>
		<footer>
			<hr>
			<p align="right"> &#169; ollevyts ivoloshi 2018</p>
		</footer>
	</body>
</html>
