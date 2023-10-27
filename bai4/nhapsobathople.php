<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function calculate($x, $y)
    {
        // if ($x == 0 && $y == 0) {
        //     throw new Exception("Lỗi ngoại lệ: / by zero");
        // }

        $tong = $x + $y;
        $tru = $x - $y;
        $nhan = $x * $y;

        if ($y == 0) {
            $chia = "Xảy ra ngoại lệ: / by zero";
        } else {
            $chia = $x / $y;
        }


        echo "Tổng x + y = " . $tong . "<br>";
        echo "Trừ x - y = " . $tru . "<br>";
        echo "Nhân x * y = " . $nhan . "<br>";
        echo "Chia x / y = " . $chia . "<br>";
    }
    echo calculate(5, 5);
    // try {
    //     calculate(5, 0);
    // } catch (Exception $e) {
    //     echo $e->getMessage();
    // }
    ?>
</body>

</html>