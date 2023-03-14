<?php
$arr = [
    'luvas' => 5,
    'bola' => 10,
    'bermuda' => 40,
    'blusa' => 25
];


function itensCaros($arr){
    $arrItensCaros = [];

    foreach ($arr as $item => $valor){
        if($valor > 10){
            array_push($arrItensCaros, $item.' => '. $valor. '<br>');
        }
    }
    return $arrItensCaros;
}

$novoArr = itensCaros($arr);
echo implode("",$novoArr);

