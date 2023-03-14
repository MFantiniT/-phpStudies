<?php
$pesos = [80, 75, 65, 96, 82];
$contador = 1;
foreach ($pesos as $peso) {
    if ($peso > 80) {
        echo "você tem $peso kilos, e está acima do limite permitido<br>";
        echo $contador . '<br>';
        $contador++;
    } else {
        echo "você tem $peso kilos, e está dentro do limite permitido<br>";
        echo $contador . '<br>';
        $contador++;
    }
}