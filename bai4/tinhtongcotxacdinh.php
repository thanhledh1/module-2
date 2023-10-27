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
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
    ];
    $sumhang = 0;
    $sumcot = 0;
    $cotcantinh = 0;
    $hangcantinh = 0;

    for ($i = 0; $i < 3; $i++) {
        $sumhang += $array[$hangcantinh][$i];
    }
    echo "tổng hàng " .$hangcantinh ." là ". $sumhang . "<br>";
    
    for ($i = 0; $i < 3; $i++) {
        $sumcot += $array[$i][$cotcantinh];
    }
    echo "tổng cột " .$cotcantinh ." là ". $sumcot . "<br>";
    ?>
</body>

</html>