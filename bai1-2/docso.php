<?php
$result = "";
$num = 0;

function read_number($num)
{
    switch ($num) {
        case 0:
            echo "zero";
            break;
        case 1:
            echo "one";
            break;
        case 2:
            echo "two";
            break;
        case 3:
            echo "three";
            break;
        case 4:
            echo "four";
            break;
        case 5:
            echo "five";
            break;
        case 6:
            echo "six";
            break;
        case 7:
            echo "seven";
            break;
        case 8:
            echo "eight";
            break;
        case 9:
            echo "nine";
            break;
        default:
            echo "out of ability";
            break;
    }
}

function read_two_digit_number($num)
{
    if ($num < 20 && $num >= 10) {
        switch ($num) {
            case 10:
                echo "ten";
                break;
            case 11:
                echo "eleven";
                break;
            case 12:
                echo "twelve";
                break;
            case 13:
                echo "thirteen";
                break;
            case 14:
                echo "fourteen";
                break;
            case 15:
                echo "fifteen";
                break;
            case 16:
                echo "sixteen";
                break;
            case 17:
                echo "seventeen";
                break;
            case 18:
                echo "eighteen";
                break;
            case 19:
                echo "nineteen";
                break;
            default:
                echo "out of ability";
                break;
        }
    } else if ($num >= 20 && $num < 100) {
        $tens = intval($num / 10);
        $ones = $num % 10;
        switch ($tens) {
            case 2:
                echo "twenty ";
                break;
            case 3:
                echo "thirty ";
                break;
            case 4:
                echo "forty ";
                break;
            case 5:
                echo "fifty ";
                break;
            case 6:
                echo "sixty ";
                break;
            case 7:
                echo "seventy ";
                break;
            case 8:
                echo "eighty ";
                break;
            case 9:
                echo "ninety ";
                break;
            default:
                echo "out of ability";
                break;
        }
        read_number($ones);
    }
}

function read_three_digit_number($num)
{
    if ($num >= 100 && $num < 1000) {
        $hundreds = intval($num / 100);
        $tens_and_ones = $num % 100;
        read_number($hundreds);
        echo " hundred ";
        if ($tens_and_ones > 0) {
            read_two_digit_number($tens_and_ones);
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = "";
    $num2 = "";
    $num3 = "";
    $num4 = "";
    if ($_POST["search"] < 10) {
        $num1 = $_POST["search"];
    } elseif ($_POST["search"] < 20) {
        $num2 = $_POST["search"];
    } elseif ($_POST["search"] <= 100) {
        $num3 = $_POST["search"];
    } elseif ($_POST["search"] > 100) {
        $num4 = $_POST["search"];
    }
}

// Test the functions
read_number($num1); // Output: five
echo "<br>";
read_two_digit_number($num2); // Output: sixteen
echo "<br>";
read_two_digit_number($num3); // Output: forty two
echo "<br>";
read_three_digit_number($num4); // Output: one hundred twenty three
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="search" id="" placeholder="Nhập số">
        <input type="submit" value="Đọc">
    </form>
</body>

</html>