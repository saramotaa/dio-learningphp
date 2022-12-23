<?php

 $nota = 8;

if ($nota >= 7) {
  echo "Aluno aprovado!";
} else if (($nota < 7) && ($nota >= 4)) {
    echo "Aluno em recuperação!";
}
  else {
    echo "Aluno reprovado!";
}

?>