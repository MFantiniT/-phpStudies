<?php

function soma($x, $y){
    return $x + $y;
}

function divisão($x, $y){
    return $x / $y;
}
function multiplica($x, $y){
    return $x * $y;
}

$x = 5;
$y = 12;
$c = soma($x, $y);
$d = divisão($x, $y);
$e = multiplica($x, $y);

echo "a soma de $x e $y é: $c <br>
a divisão de $x e $y é: $d <br>
a multiplicação de $x e $y é: $e <br>";
