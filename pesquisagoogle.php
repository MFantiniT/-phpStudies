<?php
// Inclui a biblioteca Guzzle
require 'vendor/autoload.php';
use GuzzleHttp\Client;

// Cria uma nova planilha com o array de dados
$planilha = [
    ['Nome da Imobiliária', 'Estado'],
    ['captei', 'sc'],
];

// Lê as informações da planilha
array_shift($planilha);

foreach ($planilha as $linha) {
    list($nomeImobiliaria, $estado) = $linha;
    $pesquisa = urlencode("$nomeImobiliaria $estado");

    // Realiza a pesquisa no Google
    $client = new Client();
    $resultado = $client->get("https://www.google.com/search?q=$pesquisa")->getBody()->getContents();
    //echo $resultado;
   
    // Extrai o primeiro site da pesquisa
    if (preg_match('/(www\.|https:\/\/|http:\/\/)([\w\.]*)/', $resultado, $match)) {
        $site = $match[4];
        //print_r($match);
        echo "O site da imobiliária $nomeImobiliaria é: $site\n";
    } else {
        echo "Não foi possível encontrar o site da imobiliária $nomeImobiliaria \n";
    }
}

?>