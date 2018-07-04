<?php 
session_start();
	if (isset($_POST['0']))
	   $_SESSION['0'] = 1;
    if (isset($_POST['1']))
  	  $_SESSION['1'] = 1;
    if (isset($_POST['2']))
       $_SESSION['2'] = 1;
    if (isset($_POST['3']))
	   $_SESSION['3'] = 1;
    if (isset($_POST['4']))
	    $_SESSION['4'] = 1;
    if (isset($_POST['5']))
	    $_SESSION['5'] = 1;
    if (isset($_POST['6']))
	    $_SESSION['6'] = 1;
    if (isset($_POST['7']))
	    $_SESSION['7'] = 1;
    if (isset($_POST['8']))
	    $_SESSION['8'] = 1;
    if (isset($_POST['9']))
		($_SESSION['9'] = 1);
	var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>online</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
	<div class="wrap">
		<div class="all">
			<header>
				<center>
					Актер на ночь
				</center>
			</header>
			<div class="menu">
				<?php
				session_start();
				include 'auth.php';
				 if ($_SESSION['login_user'] != NULL){
					echo '<a href="logout.php"><img class="item" src="https://png.icons8.com/metro/1600/exit.png"></a>
					<a href="index_modify.php"><img class="item" src="https://png.icons8.com/metro/1600/edit.png"></a>';
				}	
					  else {
				echo '<a href="index_login.php"><img class="item" src="http://pngimages.net/sites/default/files/login-png-image-54490.png"></a>';
	 			}
	 			
				echo '<a  href="basket.php"><img class="item" src="http://s1.iconbird.com/ico/2014/1/633/w512h5121390856920buy512.png"></a>';
				echo '<p align="right">
					<b>Здравствуй ';
					 if ($_SESSION['login_user'] == NULL) echo "GUEST";
				else
					echo $_SESSION['login_user']; 
				?>
					
				</b></p>
			</div>

			<div class="content">
				<div class="blocks">
					<div class="font"><b>Мужчины</b></div>
					<div class="miniblocks">
						<p class="name_cont">Дженсен Эклз. Цена 1000$/час<br></p>
						<img class="photo imgs" src="https://pbs.twimg.com/profile_images/3453828124/101f5ef121423ecafbdf9fb1b73d2b02_400x400.jpeg">
						<div class="info">Из этого парня пытались изгнать демона много раз, но демона страсти так просто не выгнать</div>
						<br>
						<br>
						<form  action="order.php" method="post">
						<input class = 'order_bt' type="submit" name="0" value="ХОЧУ ТЕБЯ" />
						</form>
					</div>
					<div class="miniblocks">
						<p class="name_cont">Райан Рейнольдс. Цена 4200$/час<br></p>
						<div class="info">Этот парень знает как правильно поздравить девушку с 8 марта!</div>
						<img class="photo imgs" src="http://www.intermedia.ru/img/news/323442.jpg">
						<br>
						<br>
						<form  action="order.php" method="post">
						<input class = 'order_bt' type="submit" name="1" value="ХОЧУ ТЕБЯ" />
						</form>
					</div>
					<div class="miniblocks">
						<p class="name_cont">Джеймс Макэвой. Цена 800$/час<br></p>
						<div class="info">Если вы хотите одновременно умного и красивого актера, то Джеймс Макэвой - ваш идеал!</div>
						<img class="photo imgs" src="https://starwiki.org/thumbs/photos/men-james-mcavoy-red/001-men-james-mcavoy-red-starwiki.org.jpg">
						<br>
						<br>
						<form  action="order.php" method="POST">
						<input class = 'order_bt' type="submit" name="2" value="ХОЧУ ТЕБЯ" />
						</form>
					</div>
					<div class="miniblocks">
						<p class="name_cont">Шерлок Холмс. Цена 1500$/час<br></p>
						<img class="photo imgs" src="https://kievpravda.com/media/images/34933/main/400.jpg">
						<div class="info">Если вы считаете себя гением, то Шелок вам докажет обратное!</div>
						<br>
						<br>
						<form  action="order.php" method="POST">
						<input class = 'order_bt' type="submit" name="3" value="ХОЧУ ТЕБЯ" />
						</form>
					</div>
					<div class="miniblocks">
						<p class="name_cont">Крис Хемсворт Цена 2500$/час<br></p>
						<img class="photo imgs" src="https://cdn.familyfuncanada.com/wp-content/uploads/2016/01/chris-hemsworth-thor-interview-10062011__square.jpg">
						<div class="info">Он не только Бог в фильме, но и еще божественен в постели!
						</div>
						<br>
						<br>
						<form  action="order.php" method="POST">
						<input class = 'order_bt' type="submit" name="4" value="ХОЧУ ТЕБЯ" />
						</form>
					</div>
				</div>
					<div class="blocks">
						<div class="font"><b>Женщины</b></div>
						<div class="miniblocks">
							<p class="name_cont">Элизабет Олсен. Цена 1500$/час<br></p>
							<img class="photo imgs" src="https://pp.userapi.com/c637525/v637525317/527da/ckBSL1Ya6ss.jpg?ava=1">
							<div class="info">Если вам хочется чего-то колдовского - это идеальный  вариант!</div>
						<br>
						<br>
						<form  action="order.php" method="POST">
						<input class = 'order_bt' type="submit" name="5" value="ХОЧУ ТЕБЯ" />
						</form>
						</div>
						<div class="miniblocks">
							<p class="name_cont">Черная Вдова. Цена уточняется<br></p>
							<img class="photo imgs" src="https://vokrug.tv/pic/news/c/1/2/d/c12db21a03b70e9fae97ddc88aaa950b.jpeg">
							<div class="info">Она вас уложит одной правой не только на землю, но еще и в постель!</div>
						<br>
						<br>
						<form  action="order.php" method="POST">
						<input class = 'order_bt' type="submit" name="6" value="ХОЧУ ТЕБЯ" />
						</form>
						</div>
						<div class="miniblocks">
							<p class="name_cont">Галь Гадот. Цена 3500$/час<br></p>
							<img class="photo imgs" src="https://pp.userapi.com/c639318/v639318087/6bf8c/uOJYiFdPovk.jpg?ava=1">
							<div class="info">Эта красотка умеет использовать свое лассо не только во имя добра, но и во имя разврата!</div>
						<br>
						<br>
						<form  action="order.php" method="POST">
						<input class = 'order_bt' type="submit" name="7" value="ХОЧУ ТЕБЯ" />
						</form>
						</div>
						<div class="miniblocks">
							<p class="name_cont">Марго Робби. Цена 1000$/час<br></p>
							<img class="photo imgs" src="http://novostimira.com/userfiles/30(63).jpeg">
							<div class="info">Если вы спросите у нее знает ли она откуда у вас эти шрамы, то она вся ваша!</div>
						<br>
						<br>
						<form  action="order.php" method="POST">
						<input class = 'order_bt' type="submit" name="8" value="ХОЧУ ТЕБЯ" />
						</form>
						</div>
						<div class="miniblocks">
							<p class="name_cont">Кира Найтли. Цена 1900$/час<br></p>
							<img class="photo imgs" src="http://novostimira.com/userfiles/60(34).jpg">
							<div class="info">Если вы регулярно пользуетесь торрентом, то она будет рада провести с вами время!</div>
						<br>
						<br>
						<input class = 'order_bt' type="submit" name="9" value="ХОЧУ ТЕБЯ" />
						</form>
						</div>
					</div>
			</div>
			<footer>
				<hr>
				<p align="right"> &#169; ollevyts ivoloshi 2018</p>
			</footer>
		</div>
	</div>
</body>

</html>
