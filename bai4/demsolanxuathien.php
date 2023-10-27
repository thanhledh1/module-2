<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $text = "thanh pro vip aaa";
    $a = "a";
    $count = 0;
    $lenght = strlen($text);
    for ($i = 0; $i < $lenght; $i++){
        if ($text[$i] === "a"){
            $count++;
        }
    }
    echo ("ký tự " . $a . " xuất hiên " . $count." lần");
    ?>
</body>
</html>