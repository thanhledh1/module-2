<?php 
$pattern = '/^(C|A|P)\d{4}[GHIKLM]$/';
$nameClass = "P0323A";
if (preg_match($pattern, $nameClass)) {
    echo 'Tên lớp hợp lệ';
} else {
    echo 'Tên lớp không hợp lệ';
}