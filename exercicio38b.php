<?php

$arr = ["arroz", "bola", "tomate", "macarrão"];



function arrayString($arr){
    $str = "fui ao mercado e comprei : ";
    for($i = 0; $i < count($arr); $i++){
        if($i + 1 == count($arr)){
            $str .= $arr[$i] . "."; 
        } else {
            $str .= $arr[$i]. ", ";
        }
    }
    return $str;
}

echo arrayString($arr);