<?php

$cep = "81310000";
$link = "https://viacep.com.br/ws/81310000/json/";

$ch = curl_init($link);
// configura para receber os valores em boolean
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);
// acessar em detalhes os itens do array
// print_r($data["localidade"]);

?>