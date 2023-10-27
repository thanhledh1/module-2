<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $array = [
        [1,2,3],
        [4,5,6],
        [7,8,9],
    ];
    $sumhang = 0;
    $sumcot = 0;
    $sumcheo = 0;
    for($i=0;$i <3;$i++){
        $sumhang += $array[0][$i];
    }
    echo "tổng hàng =".$sumhang ."<br>";
    for($i=0;$i <3;$i++){
        $sumcot += $array[$i][0];
    }
    echo "tổng cột = ".$sumcot."<br>";
    for($i=0; $i<3; $i++){
            $sumcheo += $array[$i][$i];
        }
    echo "tổng đường chéo = ".$sumcheo."<br>";

    ?>
</body>
</html>