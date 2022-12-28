<?php

echo "Pós-incremento ";
$a = 5;
echo "Deve ser 5: " . $a++ . "\n";
echo "Deve ser 6: " . $a . "\n";

echo "Pré-incremento ";
$a = 5;
echo "Deve ser 6: " . ++$a . "\n";
echo "Deve ser 6: " . $a . "\n";

echo "Pós-decremento ";
$a = 5;
echo "Deve ser 5: " . $a-- . "\n";
echo "Deve ser 4: " . $a . "\n";

echo "Pré-decremento ";
$a = 5;
echo "Deve ser 4: " . --$a . "\n";
echo "Deve ser 4: " . $a . "\n";

//Decrementar valores nulos não surgem efeito
//Incrementar valores nulos terão efeito, logo, nulo + 1 = 1
for ($num=0; $num < 10; $num++) { 
  echo $num;
}

?>