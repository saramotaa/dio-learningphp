<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Operadores de Atribuição</title>
  </head>
  <body> 
  <div>
    <h1>OPERAÇÕES</h1>
    <pre>
    <?php
      $preco = $_GET["p"]; //pegar do parâmetro e jogar na variável
      echo "<h2>Aplicar 10% de desconto ao preço de um produto.</h2>";
      echo "Preço do produto: R$" . number_format($preco,2,",",".") . "</br>";
      $preco -= $preco*10/100;
      echo "<br>O novo preço com 10% de desconto ficaria: R$". number_format($preco,2,",",".") . "</br>";

      $atual = $_GET["aa"];
      echo "<h2><p>Qual foi o ano anterior ao ano atual?</h2>";
      echo "O ano atual é $atual, o anterior é " . --$atual . " e o posterior é " . ++$atual . "</br>";
      //Pré incremento: ++$a
      //Pós incremento: $a++
      //Pré decremento: --$a
      //Pós decremento: $a--

      $x = "abc";
      $$x = "yxz";
      echo "<br>Variável de variável: O conteúdo da variável X é $x e o da variável criada é " . $$x;
      echo "<br>" . $x . " | " . $$x;
    ?>
    </pre>
  </div>
  </body>
</html>