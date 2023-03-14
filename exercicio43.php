<?php

$str = "carro - navio - helicoptero - barco - jangada";

$strArray = explode("-", $str);

print_r ($strArray);

for($i = 0; $i < count($strArray); $i++){
    echo "<br>";
    echo "----------------------- <br>";
    echo "Itens => ". $strArray[$i]. "<br>";
    


}