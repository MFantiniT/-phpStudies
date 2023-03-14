<?php
$arr = [];


for ($i = 10; $i <= 20; $i++){
    array_push($arr, $i);
}
for($i = 1; $i < count($arr);$i++){
    if ($arr[$i] % 2 != 0){
        echo "o numero ". $arr[$i]. " é impar<br>";
    }
    else{
        echo 'o numero '. $arr[$i]. ' é par...<br>';
    }
}