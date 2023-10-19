<?php 
    $result = "";
    if( $_SERVER["REQUEST_METHOD"] == "POST") {
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        $text = $_POST["text"];
        $password = $_POST["password"];
        if ($text === "admin" && $password === "admin") {
            $result =  "<h3>Welcome <span style='color:red'>" .$text. "</span> to website</h3>";
        } else{
            $result = "<h3><span style='color:red'>Login Error</span></h3>";
        }
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
       <style type="text/css">
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .login {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
            color: #333;
        }

        .login label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        .login input {
            width: 95%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .login input[type="submit"]:hover {
            background-color: #45a049;
        }

        .login .error {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
    
</head>

<body>
    <form action="" method="POST">
        <div class="login">
            <h2>LOGIN</h2>
            <label> Tên Đăng Nhập : <input type="text" name="text" id="" placeholder="Tên Đăng Nhập"> <br></label>
            <label> Mật Khẩu : <input type="password" name="password" id="" placeholder="Nhập Mật KhẩU"><br> </label>
            <input type="submit" value="Nhập" class="submit"><br>
        </div>
       <h3><?php echo $result ?></h3> 
    </form>

</body>

</html>