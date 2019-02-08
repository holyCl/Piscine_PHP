<?php 

function str_db($sql, $conn)
{
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    return ($row);
}
    require_once "install.php";
    session_start();
    if (!isset($_SESSION['login']))
        $_SESSION['id'] = 0;
    $hi = strstr($_SERVER['QUERY_STRING'],"tovar");
    if (strstr($_SERVER['QUERY_STRING'],"tovar"))
    {
       $id = preg_replace('~\D~', '',  $_SERVER['QUERY_STRING']);  
        $sql2 = "SELECT * FROM tovars WHERE id='$id'";
        $row2 = str_db($sql2, $conn);
        $product = $row2['product'];
        $cat = $row2['category'];
        $price = $row2['price'];
        $photo = $row2['photo'];
        $sql2 = "INSERT INTO busket (id, product, category, price, photo, user_id)
                VALUES (id, '$product', '$cat', '$price', '$photo', '$_SESSION[id]')";
        if (mysqli_query($conn, $sql2)) {
            //header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/manu.css">
    <title>Main</title>
</head>

<body>
    <header class="head wrapper">
        <nav class="navigation">
            <a href="index.php" class="logo">
                <p class="logo-text">art</p>
            </a>
            <ul class="menu">
<!--                 <li class="list"><a href="index.php">Home</a></li>
 -->                <li class="list"><a href="about.php">About us</a></li>
                <!-- <li class="list"><a href="#">Page</a></li> -->
                <li class="list"><a href="order.php">Cart</a></li>
                <?php if(!isset($_SESSION['login'])){?>
                    <li class="list"><a href="login.php">Login</a></li>
                <?php }?>
                <?php if(isset($_SESSION['login'])){?>
                    <li class="list"><a href="#">PRIVET <?php echo $_SESSION['login'];?></a></li>
                    <li class="list"><a href="logout.php">LOGOUT</a></li>
                <?php }?>
            </ul>
        </nav>
    </header>

    <div class="slider-box">
        <img src="img/slide.png" alt="girls" width="1600" height="600" class="slider-pic">
    <!--     <p class="slider-name">AFFordableE PARIS TOURS </p>
        <p class="slider-text">CITY TOURS/ TOUR TICKETS / TOUR GUIDES</p> -->
        <button class="slider-buton prev">&#8249;</button>
        <button class="slider-buton next">&#8250;</button>

    </div>

    <main>
        <div class="wrapper">
            <h2>New Collection</h2>

        <div class="dropdown">
            <button class="dropbtn">Categories</button>
                <div class="dropdown-content">
                  <a href="index.php?1">ALL</a>
                  <a href="index.php?2">MAN</a>
                  <a href="index.php?3">WOMAN</a>
                  <a href="index.php?4">KIDS</a>
                </div>
        </div>
            <ul class="products clearfix">

            <?php
            $sql2 = "SELECT * FROM tovars";
            $res = mysqli_query($conn, $sql2);
            if (!strstr($_SERVER['QUERY_STRING'],"tovar")){
                $id = preg_replace('~\D~', '',  $_SERVER['QUERY_STRING']);
                    if ($id >= 1 && $id <= 4)
                    {   echo $id;
                        if ($id == 1)
                             $prod = 1;
                        if ($id == 2)
                            $prod = "category = 'MAN'";
                        if ($id == 3)
                            $prod = "category = 'WOMAN'";
                        if ($id == 4)
                            $prod = "category = 'KIDS'";
                        $sql2 = "SELECT * FROM tovars WHERE ".$prod;
            
                        $res = mysqli_query($conn, $sql2);
                        // if ($res = mysqli_query($conn, $sql2)) {
                        //     header("Location: index.php");
                        // }
                    }
                }
                while ($row = mysqli_fetch_assoc($res))
                {
                    echo "<li class=\"item\">
                    <img src=$row[photo] alt=$row[product] width=\"255\" height=\"322\" class=\"item-image\">
                    <div class=\"item-description\">
                        <p class=\"item-name\">$row[product]</p>
                        <p class=\"item-price\">\$$row[price]</p>
                    </div>
                    <div class=\"overlay\">
                        <ul class=\"over-icons\">
                            <li class=\"icons-list first\">
                                <img src=\"img/like.png\" alt=\"like\" class=\"icon\">
                            </li>
                            <li class=\"icons-list second\">
                                <img src=\"img/arrow.png\" alt=\"arrows\" class=\"icon\">
                            </li>
                            <li class=\"icons-list third\">
                                <img src=\"img/clock.png\" alt=\"clock\" class=\"icon\">
                            </li>
                            <li class=\"icons-list cart-icon\">
                                <form method=\"post\" action=\"index.php?tovar$row[id]\">
                                        <button type=\"submit\" name=\"$row[id]\" ><img src=\"img/cart.png\" alt=\"cart\" class=\"icon cart\"> Add to cart </button>
                                </form> 
                            </li>
                        </ul>
                    </div>
                </li>" ;}
                ?>
            </ul>
        </div>
    </main>
    <footer class="page-footer">
        <div class="wrapper">
            <p class="footer-text">All Rights Reserved | Designed by © olaktion & ivoloshi </p>
<!--             <p class="footer-text footer-color">olaktion && ivoloshi</p>
 -->        </div>
    </footer>
</body>

</html>