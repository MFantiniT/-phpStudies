<?php

function par_impar($num){

    if($num % 2 == 0){
        echo "o numero $num é par<br>";
    }
    else{
        echo "o numero $num é impar<br>";
    }

}

$num = 13;

par_impar($num);