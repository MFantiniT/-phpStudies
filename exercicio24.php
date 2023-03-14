<?php

$nome = 'Matheus Fantini Teixeira';
$idade = 27;
$maiorIdade = true;
$i = 1;
$qualquer = 5.4;
$matheus = [$nome, $idade, $maiorIdade, $qualquer];

foreach ($matheus as $dadosUsuario) {

    if (is_int($dadosUsuario)) {
        echo 'este dado: ' . $dadosUsuario . ' é um inteiro';
        echo "<br>";
        echo "$i";
        echo "<br>";
        $i++;
    }
    if (is_string($dadosUsuario)) {
        echo 'este dado: ' . $dadosUsuario . ' é uma string';
        echo "<br>";
        echo "$i";
        echo "<br>";
        $i++;
    }
    if (is_bool($dadosUsuario)) {
        echo 'este dado: ' . $dadosUsuario . ' é um booleano';
        echo "<br>";
        echo "$i";
        echo "<br>";
        $i++;
    } else {
        echo 'este dado é um float';
    }
    
}