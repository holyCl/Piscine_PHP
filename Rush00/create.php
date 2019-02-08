<?php
        
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
    $login = $_POST['login'];
    $password = hash('whirlpool', $_POST['password']);
    if (isset($_POST['submit']))
    {
      if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
        {
            $err[] = "incorrect symbols";
        }
        if ($_POST['login'] && $_POST['password'] && $_POST['conf_pass'])
        {
            $_POST['password'] != $_POST['conf_pass'] ? $err[] ="Passwords do not match" : 0;
            strlen($_POST['password']) < 5 ? $err[] ="Short password(min 6)" : 0;
            $conn = mysqli_connect('localhost', 'root', '5956861', "shop");
            if (!$conn)
            {
                $err[] ="Connection failed";
            }
            $sql2 = "SELECT login FROM users";
            if (!check_login($sql2, $conn, $login)){
                $err[] ="User exist";
            }
            if (count($err) == 0){
                $sql = "INSERT INTO users (id, login, password, idp)
                VALUES (id, '$login', '$password', -1)";
                mysqli_query($conn, $sql);
                header("Location: login.php");
                exit();
            }
            else
            {
                foreach($err AS $error)
                {
                    print $error."<br>";
                }
            mysqli_close($conn);
            }
        }
    }
?>  

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="./css/login.css" />
</head>
<body>
    <div class="block">
        <div class="banner">
         <h2>First time here?</h2>
        </div>
        <div id="login">
            <form method="POST">
                <form class="clearfix">
                    <input type="text" placeholder="Login" name="login" required/>
                    <input type="password" placeholder="Password" name="password" required/>
                    <input type="password" placeholder="Repeat password" name="conf_pass" required/>
                    <input type="submit" name="submit" value="Create">
                   <p><a href="./login.php">Get back</a></p>
                </form>
            </form>
        </div>
    </div>
</body>
</html>