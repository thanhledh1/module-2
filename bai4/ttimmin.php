<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $array = [1,2,3,4,5,6,7,8,9];
    $min = $array[0];
    $lengt = count($array);

    for($i=0; $i<=$lengt-1;$i++){
        if($min > $array[$i]){
            $array[$i]=$min;
        }
    };
    echo $min;
    ?>
</body>
</html>