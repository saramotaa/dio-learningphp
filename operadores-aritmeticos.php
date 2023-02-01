<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Operadores Aritméticos</title>
  </head>
  <body> 
  <div>
    <h1>FUNÇÕES MATEMÁTICAS</h1>
    <pre>
    <?php
      $v1 = $_GET["x"]; //pegar do parâmetro e jogar na variável
      $v2 = $_GET["y"];
      $v3 = $_GET["z"];
      $v4 = $_GET["s"];
      echo "<h2>Valores recebidos: $v1 e $v2</h2>";

      echo "<br>O valor absoluto de $v2 é " . abs($v2); //Eliminar sinal negativo
      echo "<br>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2); //Potenciação
      echo "<br>A raiz de $v1 é " . sqrt($v1); //Raiz quadrada
      echo "<br>O valor arredondado com round de $v3 é " . round($v3); //Arredondamento(números reais)
      echo "<br>O valor arredondado com ceil de $v3 é " . ceil($v3); //Arred. pra cima
      echo "<br>O valor arredondado com floor de $v3 é " . floor($v3); //Arred. pra baixo
      echo "<br>A parte inteira de $v3 é " . intval($v3); //Valor inteiro da variável
      echo "<br>O valor de $v4 em moeda é R$" . number_format($v4,2,".","."); //Moeda
    ?>
    </pre>
  </div>
  </body>
</html>