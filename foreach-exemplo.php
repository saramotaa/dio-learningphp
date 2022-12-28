<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Bubble Sort</title>
</head>

<body>
<pre>
<?php

$arr = [1,2,3,4,5,6,7,8,9,10];

$qtd_elementos_array = count($arr);

//for ($i=0; $i < $qtd_elementos_array; $i++) { 
//  echo $arr[$i] . "\n";
//}

foreach ($arr as $indice => $value) {

  if ($value % 2 == 0) {
    continue;
  }
  echo "Íncide: " . $indice . " || Valor: " . $value . "|| Ímpar" . "\n";
}

?>

</pre>
</body>

</html>