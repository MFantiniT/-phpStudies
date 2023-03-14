<?php
$array = [10, 12, "matheus", 10.1, 'joao', 'carlos', true-1];
$contador = 1;
$x = count($array);
$y = sizeof($array);
while ($contador < sizeof($array)) {
    if (is_string($array[$contador])) {
        echo $array[$contador] . ' é uma string<br>';
    } else {
        echo $array[$contador] . ': este dado não é um string. <br>';
    }
    $contador++;
}

if(true == 1){
    echo 'oi';
}

echo $x. ' '. $y;