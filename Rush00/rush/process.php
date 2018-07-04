<?php


$file = "users";
echo $_POST[passwd].PHP_EOL;

// // $servername = "localhost";
 $username = $_POST["login"];
  $password = $_POST["pw"];
echo file_put_contents($file,$username);
echo file_put_contents($file,$password,FILE_APPEND);


// if (!$connect = mysqli_connect($servername, $username, $password , $databasename)) {
//     $connect = mysqli_connect($servername, $username, $password);
//     $base_created = false;
//     if ($connect) {
//         $createbase = mysqli_query($connect, "CREATE DATABASE foodshop");
//         if ($createbase) {
//             $databasename = "foodshop";
//             $base_created = true;
//         } else {
//             $base_created = true;
//             $databasename = "foodshop";
//         }
//     } else {
//         echo "Fail to connect";
//     }
// }

?>