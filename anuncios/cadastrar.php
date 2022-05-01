<?php
include($_SERVER['DOCUMENT_ROOT'] . '/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Styles -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/head-styles.php'); ?>

  <!-- Primary Meta Tags -->
  <title>Cadastro de Anúncios - Alugue Fácil</title>
  <meta name="title" content="Cadastro de Anúncios - Alugue Fácil">
  <meta name="description" content="Alugue qualquer coisa, sem burocracias e diretamente com o proprietário">
</head>

<body>

  <form action="cadastro-ok.php" method="post" class="text-left">

    <input placeholder="ID" type="text" name="id" size="30" maxlength="30" placeholder="ID" hidden><br>
    <input placeholder="Titulo" type="text" name="titulo" maxlength="45" class="form-control" required><br>
    <input placeholder="Descricao" type="text" name="descricao" maxlength="45" class="form-control" required><br>
    <input placeholder="Preco" type="text" name="preco" maxlength="45" class="form-control" required><br>
    <input placeholder="Foto" type="text" name="foto" maxlength="45" class="form-control" required><br>

    <button class="btn btn-success btn-default" type="submit">Cadastrar agora!</button>

  </form>

  <!-- Footer -->
  <!-- <//?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/footer.php'); ?> -->

  <!-- Scripts -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/body-scripts.php'); ?>

</body>

</html>