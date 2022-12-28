<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Bubble Sort</title>
</head>

<body>
<pre>
<?php

//Função de troca, onde $v1 e $v2 vão receber um valor
//O valor de alguma vai ser armazenada na $var_troca
//Então se a $var_troca receber a $v1 e será armazenada
//Nesse momento a $v1 vai receber o valor do $v2
//O valor armazenado de $var_troca irá para a $v2
//E assim ocorrerá a troca das variáveis
function troca (&$v1, &$v2)
{
  $var_troca = $v1;
  $v1 = $v2;
  $v2 = $var_troca;
}

//Array onde estes valores serão organizados 
$arr = [1,5,3,0,2,6,4];
print_r($arr);

$totQNT = count($arr);
echo "Quantidade de números para ordenar: " . $totQNT . "\n";

//
for($v1 = 0; $v1 < ($totQNT -1); $v1++){
  for($v2 = $v1+1; $v2 < $totQNT; $v2++){
    if($arr[$v1]>$arr[$v2]){
      troca($arr[$v1], $arr[$v2]);
    }
  }
}

print_r($arr);

?>

</pre>
</body>

</html>