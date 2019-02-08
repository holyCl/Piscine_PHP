<?php 
session_start();

$login = $_POST['login'];
$password = hash('whirlpool', $_POST['password']);

function str_db($sql, $conn)
{
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    return ($row);
}

function check_pass($sql, $conn, $password, $login)
{
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res))
    {
        if ($row['login'] == $login && $row['password'] == $password){
            return (1);
        }
    }
    return (0);
}

function check_login($sql, $conn, $login)
{

    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res))
    {
        if ($row['login'] == $login){
            return (0);
        }
    }
    return (1);
}
if (isset($_POST['submit']) && $_POST['submit'] === "Login")
{
    $err[] = "";
    if (!$_POST['login'] || !$_POST['password']){
        $err[] = "Invalid login or password";
        header("Location: login.php");
    }
    $conn = mysqli_connect('localhost', 'root', '5956861', "shop");
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM users";
    if (!check_login($sql, $conn, $login))
    {
        if (!check_pass($sql, $conn, $password, $login)){
            $err[] = "Invalid login or password";
            foreach($err AS $error)
                {
                    print $error."<br>";
                }
        }
        else
        {
            $sql = "SELECT id FROM users where login = '$login'";
            $row = str_db($sql, $conn);
            $_SESSION['login'] = $login;
            $_SESSION['id'] = $row['id'];
            header("Location: index.php");
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css" />
</head>
<body>
    <div class="block">
        <div class="banner">
         <h2>Just do IT</h2>
        </div>
        <div id="login">
            <form method="POST">
                <form class="clearfix">
                    <input type="text" placeholder="Login" name="login" required/>
                    <input type="password" placeholder="Password" name="password" required/>
                    <input type="submit" name="submit" value="Login">
                    <p><a href="./create.php">Create an account</a></p>
                    <p><a href="./index.php">Get back</a></p>
                     <!-- переход на фотрму регистарции (create) -->
                </form>
            </form>
        </div>
    </div>
</body>
</html>