<?php 
function findNumber($arr, $num){
    $count = 0;
    for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] == $num){
            $count++;
        }
    }
    return $count;
}
$numbers = [1, 2, 3, 4, 5, 6, 3, 3];
$value = 3;
$num = findNumber($numbers, $value);
echo "số lần xuất hiên của  ". $value . " là " . $num. " lần";

?>