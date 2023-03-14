<?php
$velocidade = 20;

if ($velocidade < 40) {
    echo 'você esta na velocidade permitida';
} else if ($velocidade == 40) {
    echo 'atenção você atingiu 40km/h';
} else {
    echo 'perigo, acima da velocidade permitida, radar a 100 metros';
}