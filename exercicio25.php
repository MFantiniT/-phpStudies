<?php
$num1 = '60';
$num2 = 25;
$nome = 'matheus fantini teixeira';
if (is_numeric($num1)) {
    $num2 = $num1 * 2;
    if ($num2 > 100) {
        echo 'o numero é maior que 100';
    } else {
        echo 'este numero é menor que 100';
    }
} else {
    echo 'não é um número';
}