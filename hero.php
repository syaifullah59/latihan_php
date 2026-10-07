<?php

$namaheroml = "akai";
$level = 3;

if($level < 4) {
    echo $namaheroml. " belum memiliki ulti.";
} else if($level >= 4) {
    echo $namaheroml. " sudah memiliki ulti.";
} else {   
    echo "tidak ada dalam permainan.";
}

// switch ($level) {
//     case 4:
//         echo $namaheroml. " sudah memiliki ulti.";
//         break;
//     case 3:
//         echo $namaheroml. " belum memiliki ulti.";
//         break;
//     default:
//         echo "tidak ada dalam permainan.";
// }