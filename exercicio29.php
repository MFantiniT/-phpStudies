<?php

$array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$i = 0;
$array_length = count($array);

while ($i < $array_length) {
    if ($array[$i] == 30 || $array[$i] == 40) {
        echo 'o valor ' . $array[$i] . ' foi pulado<br>';
        $i++;
        continue;
    }
    echo $array[$i] . '<br>';
    $i++;
}