<?php
$str = "este item está em promoção";
$novaString = "";
for($i = 0; $i < strlen($str); $i++){
    
    if ($i == 0 ){
        $novaString .= strtoupper($str[$i]);
    } else if ($i >= strlen($str)-10){
        $novaString .= strtoupper($str[$i]);
    } else {
        $novaString .= $str[$i];
    }
}
echo $novaString;