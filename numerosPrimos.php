<?php
$num = 59;
$cont_div = 0;

for ($i = 1; $i <= $num; $i++) {

    if ($num % $i === 0) {
        $cont_div += 1;
    }


}
if ($cont_div === 2) {
    echo "o numero $num é primo...";
} else {
    echo "o numero $num não é primo...";
}








//numeros primos são aqueles que tem apenas dois divisores, 1 e eles mesmo.
//todos os numeros pares não são primos
?>