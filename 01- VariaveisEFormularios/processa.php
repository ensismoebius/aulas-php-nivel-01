<?php

// Para criar uma variável em php basta escrever a variável

// Cria uma variável numérica
$variavelNumerica = 10;

// Cria uma variável para texto (ou seja, string)
$variavelDeTexto = "Olá mundo!";

// Recupera os dados enviados via POST
$mensagem = "Olá dona ou dono do cpf: " . $_POST ["cpf"] . " você ganhou um iphone!";
echo $mensagem;

// Recupera os dados enviados via GET
$mensagem = "Olá dona ou dono do cpf: " . $_GET ["cpf"] . " você ganhou um iphone!";
echo $mensagem;
?>
