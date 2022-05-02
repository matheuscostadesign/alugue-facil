<?php
include($_SERVER['DOCUMENT_ROOT'] . '/protect.php');
include("Anuncios.php");
$anuncios = new Anuncios;
$anuncios->setId($_REQUEST["id"]);
$anuncios->setTitulo($_REQUEST["titulo"]);
$anuncios->setDescricao($_REQUEST["descricao"]);
$anuncios->setPreco($_REQUEST["preco"]);
$anuncios->setFoto($_REQUEST["foto"]);
$anuncios->ConectaBD();
$anuncios->Alterar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Styles -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/head-styles.php'); ?>

  <!-- Primary Meta Tags -->
  <title>Editar Anúncios - Alugue Fácil</title>
  <meta name="title" content="Alugue Fácil - Alugue qualquer coisa sem burocracias">
  <meta name="description" content="Alugue qualquer coisa, sem burocracias e diretamente com o proprietário">
</head>

<body class="bg-light">

  <!-- Header -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/header.php'); ?>

  <section class="py-5">
    <div class="container px-5">
      <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="text-center mb-4">
          <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
          <h1 class="fw-bolder green">Anúncio alterado <br>com sucesso!</h1>
        </div>
        <div class="row gx-5 justify-content-center">
          <div class="col-lg-8 col-xl-6">
            <input placeholder="ID" type="text" name="id" size="30" maxlength="30" placeholder="ID" hidden>
            <div class="form-floating mb-3">
              <p><strong>Foto: </strong><?php echo ($anuncios->getFoto()) ?></p>
            </div>
            <div class="form-floating mb-3">
              <p><strong>Título: </strong> <?php echo ($anuncios->getTitulo()) ?></p>
            </div>
            <div class="form-floating mb-3">
              <div class="col-lg-4 pl-0">
                <p><strong>Preço: </strong><?php echo ($anuncios->getPreco()) ?></p>
              </div>
            </div>
            <div class="form-floating mb-3">
              <p><strong>Descricao: </strong><?php echo ($anuncios->getDescricao()) ?></p>
            </div>
            <div class="d-grid">
              <a href="/painel.php" class="btn btn-primary btn-lg" style="width: 100%;">Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/footer.php'); ?>

  <!-- Scripts -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/body-scripts.php'); ?>

</body>

</html>