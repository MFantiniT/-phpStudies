<?php

function arrayNum($arr){
    $arr_maiores7 = [];
    foreach ($arr as $ar) {
        if ($ar >= 7) {
            array_push($arr_maiores7, $ar);
        }
    }
    return $arr_maiores7;
}

$arr = [1, 5, 3, 6, 4, 25, 21, 14, 2, 3, 6, 98, 52, 1, 4, 2, 8];
$arr_maiores7 = arrayNum($arr);

print_r($arr_maiores7);