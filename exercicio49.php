<?php

$raca = "Pitbull";
$idade = 2;
$pelo = "cinza";
$vacinado = true;

$cachorro = compact('raca','idade','pelo','vacinado');
$arrKeys  = array_keys($cachorro);
print_r($arrKeys);
for($i = 0; $i < count($cachorro); $i++){
    if($cachorro[$arrKeys[$i]]===true){
        echo ' o cachorro está vacinado <br>';
    } else {
    echo $cachorro[$arrKeys[$i]]. '<br>';
    }
}