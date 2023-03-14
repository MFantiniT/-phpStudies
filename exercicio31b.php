<?php

$arr = ["matheus","joao","florianópolis"];

$arr_implode = implode(", ",$arr);

print_r($arr_implode);

foreach($arr as $ar){
    echo '<br>'.$ar;
}