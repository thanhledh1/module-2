<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h1> Simple Calculator</h1>
        First operad : <input type="number" name="first" id=""> <br>
        Openrator :
        <select id="tinhtoan" name="tinhtoan">
        <option value="cong">Cộng</option>
        <option value="tru">Trừ</option>
        <option value="nhan">Nhân</option>
        <option value="chia">Chia</option>
        </select> <br>
        Second operad : <input type="number" name="second" id=""> <br>
        <input type="submit" value="Calculate">
    </form>
    <?php 
    // lấy dữ liệu form
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $first = $_POST['first'];
        $second = $_POST['second'];
        $tinhtoan = $_POST['tinhtoan'];
     }
     $result = 0;
     if($tinhtoan == "cong"){
        $result = $first + $second;
     } else if($tinhtoan == "tru"){
        $result = $first - $second;
     } else if($tinhtoan == "nhan"){
        $result = $first * $second;
     }  else if($tinhtoan == "chia"){
        $result = $first / $second;
     }
     echo "result: " . $result;
    ?>
</body>
</html>