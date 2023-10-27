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
        [1,2,20,4],
        [5,6,19,8],
        [9,10,11,12]
    ];
    
    $max = $array[0][0];
    $rowCount = count($array);  // Số hàng của mảng
    $columnCount = count($array[0]);  // Số cột của mảng (giả sử các hàng có cùng số cột)

    for ($i = 0; $i <= $rowCount -1 ; $i++){
        for($j = 0; $j <=$columnCount - 1 ; $j++){
            if ($max < $array[$i][$j]){
                $max = $array[$i][$j];
            }
    }
    }
     echo $max;
    ?>
</body>
</html>