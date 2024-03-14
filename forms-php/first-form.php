<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado</title>
</head>
<body>
  <header>
    <h1>Resultado do Formulário!</h1>
  </header>
  <main>
    <?php 
      $name = trim($_GET["name"]) ?? "vazio";
      $lastName = trim($_GET["last-name"]) ?? "vazio";

      echo "<p>Seja bem vindo, $name $lastName!</p>"
    ?>

    <p><a href="javascript:history.go(-1)">Voltar para o formulário.</a></p>
  </main>
</body>
</html>