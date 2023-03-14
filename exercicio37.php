<?php

function defineCorCarro($cor = "vermelha"){
    if (is_string($cor)) {
        echo '<br>a cor do carro é: ' . $cor;
    }
}

defineCorCarro();
defineCorCarro("preto");
defineCorCarro(22);