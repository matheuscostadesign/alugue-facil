<?php
include($_SERVER['DOCUMENT_ROOT'] . '/protect.php');
include("Anuncios.php");
$imagem = $_FILES["foto"];
$anuncios = new Anuncios;
if ($imagem != NULL) {
  // $nomeFinal = time() . '.jpg';
  // if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
  //   $tamanhoImg = filesize($nomeFinal);
  //   $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
  //   $anuncios->setFoto($mysqlImg);
  // }
  $nome_foto = 'padrao.jpg';
  if (isset($_FILES['foto']) && $_FILES['foto']['size'] > 0) :

    $extensoes_aceitas = array('bmp', 'png', 'svg', 'webp', 'jpeg', 'jpg');
    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));

    // Validamos se a extensão do arquivo é aceita
    if (array_search($extensao, $extensoes_aceitas) === false) :
      echo "<div class='alert alert-danger text-center' role='alert'>Extensão inválida!</div>";
      exit;
    endif;

    // Verifica se o upload foi enviado via POST   
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) :

      // Verifica se o diretório de destino existe, senão existir cria o diretório  
      if (!file_exists("fotos")) :
        mkdir("fotos");
      endif;

      // Monta o caminho de destino com o nome do arquivo  
      $nome_foto = date('dmY') . '_' . $_FILES['foto']['name'];

      // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
      if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/' . $nome_foto)) :
        echo "Houve um erro ao gravar arquivo na pasta de destino!";
      endif;
      $anuncios->setFoto($nome_foto);
    endif;
  endif;
}
$anuncios->setId($_REQUEST["id"]);
$anuncios->setTitulo($_REQUEST["titulo"]);
$anuncios->setDescricao($_REQUEST["descricao"]);
$anuncios->setPreco($_REQUEST["preco"]);
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

<body class="bg-light">

  <!-- Header -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/header.php'); ?>

  <section class="py-5">
    <div class="container">
      <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="text-center mb-4">
          <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
          <h2 class="fw-bolder green">Anúncio cadastrado <br>com sucesso!</h2>
        </div>
        <div class="row gx-5 justify-content-center">
          <div class="col-lg-8 col-xl-6">
            <input placeholder="ID" type="text" name="id" size="30" maxlength="30" placeholder="ID" hidden>
            <div class="form-floating mb-3">
              <div class="text-center">
                <img src='/anuncios/fotos/<?= $anuncios->getFoto() ?>' style="width: 300px; height: 175px; object-fit: contain;">
              </div>
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