<?php 
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
        echo $_SERVER["REQUEST_METHOD"];
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    // kiem tra trang thai ng dung da gui len 
    if( isset($_GET["submit"]) ){
        echo $_GET['username'];
        echo "<br>";
        echo $_GET['password'];
        
    }
    // // kiem tra trang thai ng dung gui len
    // if(  $_SERVER["REQUEST_METHOD"]  == "POST"){
    //     echo $_POST['username'];
    //     echo "<br>";
    //     echo $_POST['password'];
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        User Name : <input type="text" name="username"> <br>
        PassWord : <input type="password" name="password"> <br>
        <input type="submit" name="submit" value="login">

    </form>
</body>
</html>