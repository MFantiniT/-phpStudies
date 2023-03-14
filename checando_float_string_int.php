<?php
$num = array(0.5, 12, 12.1, 0.9, 14, 9.3, 4.1, 'oi', 'meu nome não é jhony','eu soy um filme');

foreach ($num as $key => $value) {
    if (is_float($value)) {
        echo "o numero $value é decimal.<br>";
    }
    if (is_string($value)){
        echo "o numero $value é uma string <br>";
    }      
    if (is_int($value)){
        echo "o numero $value é um inteiro <br>";
    }
}


?>