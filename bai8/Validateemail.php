<?php
$pattern = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)+$/";

$email = "thanh@gmail.com";
if (preg_match($pattern, $email)) {
    echo 'Email hợp lệ';
} else {
    echo 'Email không hợp lệ';
}