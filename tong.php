<?php 
    // buoc 1 kiem tra du lieu gui len
    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
        // b2 in ra du lien ng dung gui len
        echo "<pre>";
        print_r ($_POST);
        echo "</pre>";
          //    B3 luu tru vao bien
          $soa = $_POST['soa'];
          $sob = $_POST['sob'];
        //   b4 xu ly
        $sum = $soa + $sob;
        echo "ket qua la: " . $sum;
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
        So a <input type="number" name="soa" id="">
        So b <input type="number" name="sob" id=""> <br>
        <input type="submit" value="ket qua" name="submit">
    </form>
</body>
</html>