<?php

$arrDimensional = [range(0,4), range(5,9), range(10,14)];
// print_r($arrDimensional);

for($i = 0;$i < count($arrDimensional); $i++){
    for($d = 0; $d < count($arrDimensional[$i]);$d++){
        if($i>0 && $d == 0){
            echo 'novo array: <br>';
        }
        echo $arrDimensional[$i][$d].'<br>';
    }
}



























?>