<?php

$carros = ['Ferrari','BMW','Mercedes'];

//array associativo
$endereco = [
  'cep' => "99999-999",
  'numero' => "999" ,
  'cidade' => "Belo Horizonte",
  'estado' => "Minas Gerais",
];

$enderecoPessoas = [
  'p1' => array(
      'cep' => "99999-999",
      'numero' => "999" ,
      'cidade' => "Belo Horizonte",
      'estado' => "Minas Gerais",
  ),

  'p2' => [
      'cep' => "00000-000",
      'numero' => "000" ,
      'cidade' => "Horizonte Belo",
      'estado' => "Gerais Minas",   
  ],
];

if(isset($enderecoPessoas['p2']['bairro'])){
  print_r($enderecoPessoas['p2']['bairro']);
  //ou var_dump
} else {
  echo "Chave inválida";
}

?>