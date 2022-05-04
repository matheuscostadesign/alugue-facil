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

<body class="bg-light">

  <!-- Header -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/header.php'); ?>

  <section class="py-5">
    <div class="container">
      <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="text-center mb-4">
          <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
          <h2 class="fw-bolder">Cadastrar anúncio</h2>
        </div>
        <div class="row gx-5 justify-content-center">
          <div class="col-lg-8 col-xl-6 col-sm-12">
            <form action="cadastro-ok.php" method="post" enctype="multipart/form-data">
              <input placeholder="ID" type="text" name="id" size="30" maxlength="30" placeholder="ID" hidden>
              <div class="custom-file mb-3 text-center">
                <img src="/anuncios/fotos/padrao.png" id="image-preview" style="width: 300px; height: 175px;">
                <input type="file" name="foto" id="imagem" class="mt-3 mb-3" onchange="previewImagem()">
              </div>
              <div class="form-floating mb-3 mt-3">
                <input class="form-control" name="titulo" maxlength="45" type="text" placeholder="Informe o título do anúncio" required />
              </div>
              <div class="form-floating mb-3">
                <div class="col-lg-4 pl-0">
                  <input class="form-control" name="preco" maxlength="45" type="number" placeholder="Preço" required />
                </div>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" name="descricao" type="text" placeholder="Descreva os detalhes do item e as opções de contato" style="height: 8rem" required></textarea>
              </div>
              <div class="d-grid">
                <button class="btn btn-success btn-default btn-lg" type="submit" style="width: 100%;">Cadastrar!</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/footer.php'); ?>

  <!-- Scripts -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/body-scripts.php'); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
    function previewImagem() {
      var imagem = document.querySelector('input[name=foto]').files[0];
      var preview = document.getElementById('image-preview');
      var reader = new FileReader();

      reader.onloadend = function() {
        preview.src = reader.result;
      }

      if (imagem) {
        reader.readAsDataURL(imagem);
      } else {
        preview.src = "";
      }
    }
  </script>

</body>

</html>