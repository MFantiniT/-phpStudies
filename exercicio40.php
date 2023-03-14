<?php

$str = "O rato roeu a roupa do rei de Roma";
$a = 0;
for($i = 0; $i < strlen($str); $i++){

    if($str[$i]== "a"){
        $a += 1;
    }
}
echo "o numero de carateres 'a' na string é: $a caracteres";