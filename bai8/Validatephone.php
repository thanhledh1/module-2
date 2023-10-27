<?php
$pattern = "/^\d{2}-0\d{9}$/";
$phoneNumber ="84-0978489648";
if (preg_match($pattern, $phoneNumber)) {
    echo 'số đt hợp lệ';
} else {
    echo 'sđt không hợp lệ';
}