<?php
function findMin($arr): int
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}
$nums = [-2, 0, 5, 7, 9, -5, 30, 100];

foreach ($nums as $num) {
    echo $num . " ";
}
$minValue = findMin($nums);
echo "</br>";
echo "The minimum value is: " . $minValue;
 echo "</br>";

function findMax($arr): int
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}
$nums = [-2, 0, 5, 7, 9, -5, 30, 100];

foreach ($nums as $num) {
    echo $num . " ";
}
$maxValue = findMax($nums);
echo "</br>";
echo "The maximum value is: " . $maxValue;
?>
