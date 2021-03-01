<?php

const constante = "Isso é uma constante";

$nome = "Fulano";

$idade = 18;

$anoNascimento = date("Y") - $idade;


 
/**
  * Exibir na página o nome do usuário e o seu ano de nascimento: Exemplo:"Olá, fulano de tal, você nasceu em 1988."
  */

  //echo date ("d/m/Y");
 
  echo "<h1>Olá, $nome, você nasceu em $anoNascimento</h1>";

  