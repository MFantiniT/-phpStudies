<?php

function multiplicacao(){

    $var1 = 2;
    $var2 = 2;
    $var3 = 2;

    echo $var1*$var2*$var3;

}

multiplicacao();

$num1 = 12;
$num2 = 3;
$num3 = 2;

function multiplica_com_parametros($num1, $num2, $num3){

    echo '<br>'.$num1*$num2*$num3;

}

multiplica_com_parametros($num1,$num2,$num3);