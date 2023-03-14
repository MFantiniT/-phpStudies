<?php

$pessoa = [
    'nome' => 'marcos',
    'idade' => '11',
    'email' => 'marcos.ps16@gmail.com'
];

if ($pessoa['idade'] >= 18) {
    echo "o usuário " . $pessoa['nome'] . " tem " . $pessoa['idade'] . " anos, por isso ele pode entrar!!";
} else {
    echo 'o usuário ' . $pessoa['nome'] . " é menor de idade, por isso não pode entrar";
}








?>