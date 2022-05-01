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
$anuncios->Incluir();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Styles -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/head-styles.php'); ?>

  <!-- Primary Meta Tags -->
  <title>Cadastro de Anúncio - Alugue Fácil</title>
  <meta name="title" content="Alugue Fácil - Alugue qualquer coisa sem burocracias">
  <meta name="description" content="Alugue qualquer coisa, sem burocracias e diretamente com o proprietário">
</head>

<body>

  <div class="container-fluid ps-md-0">
    <div class="row g-0">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <a href="#">
                  <img src="/imgs/logo.svg" alt="Logo Alugue Fácil" width="400">
                </a>
                <h3 class="login-heading green">Anúncio cadastrado com sucesso!</h3>

                <p><strong>Título: </strong> <?php echo ($anuncios->getTitulo()) ?></p>
                <p><strong>descricao: </strong><?php echo ($anuncios->getDescricao()) ?></p>
                <p><strong>Preço: </strong><?php echo ($anuncios->getPreco()) ?></p>
                <p><strong>Foto: </strong><?php echo ($anuncios->getFoto()) ?></p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <!-- <//?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/footer.php'); ?> -->

  <!-- Scripts -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/body-scripts.php'); ?>

</body>

</html>