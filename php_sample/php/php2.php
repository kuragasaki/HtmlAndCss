<?php
// 素数算出
    $sosu_array = array();

    for ($i1 = 2; $i1 <= 10000; $i1++) {
        for ($i2 = 2; $i2 <= $i1; $i2++) {
            if ($i1 == $i2) {
                $sosu_array[] = $i2;
                break;
            } else if ($i1 % $i2 == 0) {
                break;
            }
        }
    }

    foreach ($sosu_array as $value) {
        echo "$value<br>";
    }
?>