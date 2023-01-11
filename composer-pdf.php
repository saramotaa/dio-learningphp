<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Dependecies</title>
</head>

<body>
<pre>
<?php

//Dependência com Composer para gerar PDF
//Utilizando a dependência mpdf/mpdf versão ^8.1

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Olá mundo!</h1>');
$mpdf->Output();

?>
</pre>
</body>

</html>