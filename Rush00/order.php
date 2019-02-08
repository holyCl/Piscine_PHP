<?php 

    include "install.php";
    session_start();

    $cat = $_GET['value'];
    $sql = "SELECT * FROM busket WHERE user_id = '$_SESSION[id]'";
    $res = mysqli_query($conn, $sql);

    $hi = strstr($_SERVER['QUERY_STRING'],"remove");
    if (strstr($_SERVER['QUERY_STRING'],"remove"))
    {
       $id = preg_replace('~\D~', '',  $_SERVER['QUERY_STRING']);  
       echo $id;
       $sql2 = "delete FROM busket WHERE id='$id'";
        if (mysqli_query($conn, $sql2)) {
            header("Location: order.php");
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
    <title>Main</title>
</head>

<body>
    <header class="head wrapper">
        <nav class="navigation">
            <a href="index.php" class="logo">
                <p class="logo-text">art</p>
            </a>
            <ul class="menu">
                <li class="list"><a href="index.php">Home</a></li>
                <li class="list"><a href="about.php">About us</a></li>
                <!-- <li class="list"><a href="#">Page</a></li> -->
                <li class="list"><a href="#">Order</a></li>
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

    <main>
        <div class="wrapper">
            <h2>ORDER</h2>
            <?php
        $i = 0;$count = 0;
        while ($row = mysqli_fetch_assoc($res))
        {
            echo "<fieldset><legend>$row[product]</legend><img width='120px' height='120px' src=$row[photo]><br><br>price: $row[price]$
             <form method=\"post\" action=\"order.php?remove$row[id]\">
                <button type=\"submit\" name=\"$row[id]\" ><img src=\"img/6.png\" alt=\"cart\" class=\"del\"></button>
               </form> 
               </fieldset>";
            $i += $row['price'];
            $count++;
        }
        ?>

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