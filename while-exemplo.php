<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Bubble Sort</title>
</head>

<body>
<pre>
<?php

$frutas = ["banana","maçã","pêra","uva"];

$contador = count($frutas);

$i = 0;
while ($i < $contador){
  if ($frutas[$i] == "pêra"){
    break;
  }
  
  echo $frutas[$i] . "\n";
  $i++;
}


?>

</pre>
</body>

</html>