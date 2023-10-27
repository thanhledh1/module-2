<?php

include_once 'exception.php';

function divide($numerator, $denominator): float
{
    if ($denominator === 0) {
        throw new DivideByZeroException();
    }
    return $numerator / $denominator;
}
try {
    $result = divide(100, 5);
    echo $result;
    $result = divide(100, 0);
    echo $result;
} catch (DivideByZeroException $e) {
    echo 'Error: ' . $e;
}