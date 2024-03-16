<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Convertido</title>
</head>
<body>
  <main>
    <h1>Convertido</h1>
    <?php 
      $inicio = date('m-d-Y', strtotime('-7 days'));
      $fim = date('m-d-Y');

      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $inicio .'%27&@dataFinalCotacao=%27'. $fim .'%27&$top=1&$orderby=cotacaoCompra%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

      $dados = json_decode(file_get_contents($url), true);  
      $cotação = $dados["value"][0]["cotacaoCompra"];
      $data = $dados["value"][0]["dataHoraCotacao"];

      $real = $cotação * $_GET['din'];
      $dolar = $real / $cotação;

      echo "<p>Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".") . " no dia $fim!</p>"; 
    ?>
  </main>
</body>
</html>