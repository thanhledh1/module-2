<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $arr1 = [1,2,3,4];
    $arr2 = [5,6,7,8];
    $arr3 = [];
    for($i=0; $i < 4; $i++) {
        $arr3[] = $arr1[$i];
    }
    for ($i=0; $i < 4; $i++) {
        $arr3[] = $arr2[$i];
    }
    print_r($arr3);
    ?>
</body>
</html>