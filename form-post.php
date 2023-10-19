<?php 
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
        echo $_SERVER["REQUEST_METHOD"];
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // kiem tra trang thai ng dung da gui len 
    if( isset($_POST["submit"]) ){
        echo $_POST['username'];
        echo "<br>";
        echo $_POST['password'];
        
    }
    
    // B1: kiem tra trang thai ng dung gui len
    if(  $_SERVER["REQUEST_METHOD"]  == "POST"){
        // B2 in ra du lieu ng dung gui len 
           echo "<pre>";
           print_r($_POST);
           echo "</pre>";
        //    B3 luu tru vao bien
        $username = $_POST["username"];
        $password = $_POST["password"];
        // B4 xu ly
        echo $username;
        echo "<br>";
        echo $password;


    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        User Name : <input type="text" name="username"> <br>
        PassWord : <input type="password" name="password"> <br>
        <input type="submit" name="submit" value="login">

    </form>
</body>
</html>