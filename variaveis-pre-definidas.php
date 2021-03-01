<?php

//Exibi informações sobre a variavel, como o tipo, o valor e etc.

//var_dump($_GET);

//$_GET e $_POST é um array que recebe os parametros passados pela requisição.

$nome = $_GET["nome"];

$idade = $_GET["idade"];

$anoNascimento = 2021 - $idade;

echo "<h1>Olá, $nome, você nasceu em $anoNascimento</h1>";
