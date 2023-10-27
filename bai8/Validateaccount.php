<?php 
$Pattern = "/^[_a-z0-9]{6,}$/";
$accont = "_abc123";
if (preg_match($Pattern, $accont)) {
    echo 'tk hợp lệ';
} else {
    echo 'tk không hợp lệ';
}