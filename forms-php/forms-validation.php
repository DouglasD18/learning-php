<?php 

if ( isset($_POST["nome"]) && empty( $_POST['nome'] ) ) {
  echo 'Preencha o campo nome!<br/>';
}

if ( isset($_POST['cpf']) && !is_numeric( $_POST['cpf'] ) ) {
  echo 'CPF deve ser preenchido apenas com números!';
}

?>

<form action="" method="post">

<label for="nome">Nome
<input type="text" name="nome" id="nome">
</label>

<label for="cpf">CPF
<input type="text" name="cpf" id="cpf">
</label>

<input type="submit" value="Cadastrar">

</form>