<?php
$idade = '22';
$idade2 = '32';
$idade3 = '17';

$idades = [$idade, $idade2, $idade3];

foreach ($idades as $idade) {

    if ($idade >= 18) {
        echo "você tem $idade, por ser maior de 18 pode entrar.";
        echo '<br>';
    } else {
        echo 'você é de menor, não pode entrar';
        echo '<br>';
    }


}