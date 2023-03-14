<?php


function operadoresBasicos($a, $b){

    echo "soma: ". $a + $b;
    echo '<br>';
    echo "multiplicação; " . $a * $b;
    echo "<br>";
    echo "divisão: " . $a / $b;
    echo "<br>";
    echo "subtração: " . $a - $b;
}


$a = 120;
$b = 50;

operadoresBasicos($a, $b);
