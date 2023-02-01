<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Operadores Relacionais</title>
  </head>
  <body> 
  <div>
    <pre>
    <?php
      echo "<h2><br>Operador Unário</h2>";
      $a = $_GET["x"];
      $b = $_GET["y"];
      $s = $a>$b?"SIM":"NÃO"; //Se $a for maior do que $b, receberá "SIM"
      echo "$a é maior do que $b? $s.</br>";

      echo "<h2><br>Exemplo de média escolar</h2>";
      $m = 6;
      $nota = $m<7?"Recuperação":"Aprovado";
      echo $nota;

      echo "<h2><br>Usuário escolher entre somar ou multiplicar dois números</h2>";
      $n1 = 4;
      $n2 = 5;
      $tipo = $_GET["t"];
      echo "Os valores são <strong>$n1</strong> e <strong>$n2</strong>. Escreva no URL 't=s' para Soma ou 't=m' para Multiplicação";
      $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
      echo "<br>Resultado: " . $r;

      echo "<h2><br>Usuário escolher entre somar ou multiplicar dois números</h2>";
      $i1 = 3;
      $i2 = "3";
      $comp = $i1===$i2?"SIM":"NÃO";
      echo "As variáveis $i1 (inteiro) e $i2 (string) são idênticos? " . $comp; //iguais e mesmo tipo primitivo

      echo "<h2><br>Usuário escolher entre somar ou multiplicar dois números</h2>";
      $nota1 = $_GET["b"];
      $nota2 = $_GET["c"];
      $no = ($nota1+$nota2)/2;
      echo "A media entre as notas de valores $nota1 e $nota2 é $no </br>";
      $sit = ($no<6)?"Aluno REPROVADO":"Aluno APROVADO";
      //ou echo "A situação do aluno é " . ($no<6)?"Aluno REPROVADO":"Aluno APROVADO";
      echo $sit;

      echo "<h2><br>Operador Lógico</h2>";
      $ano = $_GET["an"];
      $idade = 2023 - $ano;
      echo "Quem nasceu em $ano tem idade de $idade anos</br>";
      $tipo = ($idade>=18 && $idade<=64)?"OBRIGATÓRIO VOTAR":"NÃO VOTA";
      echo "<br>E essa pessoa vota? " . $tipo;
    ?>
    </pre>
  </div>
  </body>
</html>