<?php

function luasSegitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

function sum (...$input) {
    $result = 0;
    foreach ($input as $value) {
        $result =$result + $value;
    }
    return $result;
}
echo sum(1, 2, 3, 4, 5);