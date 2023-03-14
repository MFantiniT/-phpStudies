<?php 

$contador = 4;
$limite = 30;

while($contador <= $limite){
    echo $contador.'<br>';
    $contador+=2;
    
    
    if($contador == 24){
        echo $contador;
        break;
    }
}