<?php

function criaArrStrings(){
    $arr = [];
    for($i = 0; $i <= 13; $i++){
        array_push($arr, "cria array teste $i");
        // print_r($arr);
    }
    return $arr;
}


$arr = criaArrStrings();


function arrayString($arr, $arr1){
    $arr1 = implode(", ",$arr);
    return $arr1;
}
$arr1 = "";
$array_string = arrayString($arr, $arr1);

echo $array_string;