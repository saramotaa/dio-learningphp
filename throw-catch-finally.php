<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Throw/Catch/Finally</title>
</head>

<body>
<pre>
<?php

//Divisão onde o divisor não pode ser zero
//RangeException: Erros aritméticos
//Tratando exceções

function divisao($dividendo, $divisor)
{
  try{
    if($divisor == 0){
      throw new RangeException("Divisor não pode ser zero.");
    }

    $resultado = $dividendo/$divisor;
    
    echo "O resultado é " . $resultado;
    } catch(Exception){
      echo "O número não pode ser dividido por zero";
    } finally {
      echo "<br/>Tratando exceções";
    }
}

divisao(10,0);

// Na antiga versão se usava:
// catch(Exception $e){
//   echo $e -> getMessage();

//finally é opcional, aparece independente de ser verdadeiro ou falso

?>
</pre>
</body>

</html>