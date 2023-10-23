<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Chuyển Đổi Tiền tệ</h1>
        Số tiền USD <input type="number" name="usd" id=""> <br>
        <input type="submit" value="Chuyển đổi">
    </form>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $usd = $_POST["usd"];
        }
        $tygia = 23000;
        $result = $usd * $tygia;
        echo "kết quả là: " . $result . "VND"
    ?>
</body>
</html>