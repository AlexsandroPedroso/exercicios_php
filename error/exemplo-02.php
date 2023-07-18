<?php
// sobre escreve o que esta setado no PHP.INI
error_reporting(E_ALL & ~ E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

?>