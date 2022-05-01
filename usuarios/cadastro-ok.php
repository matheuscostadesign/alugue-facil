<?php
include("Usuarios.php");
$usuarios = new Usuarios;
$usuarios->setId($_REQUEST["id"]);
$usuarios->setNome($_REQUEST["nome"]);
$usuarios->setEmail($_REQUEST["email"]);
$usuarios->setSenha($_REQUEST["senha"]);
$usuarios->ConectaBD();
$usuarios->Incluir();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Styles -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/head-styles.php'); ?>

  <!-- Primary Meta Tags -->
  <title>Cadastro - Alugue Fácil</title>
  <meta name="title" content="Alugue Fácil - Alugue qualquer coisa sem burocracias">
  <meta name="description" content="Alugue qualquer coisa, sem burocracias e diretamente com o proprietário">
</head>

<body class="bg-green">

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex bg-green">
          </div>
          <div class="card-body p-4 p-sm-5">
            <div class="logo text-center mb-2">
              <a href="#">
                <img src="/imgs/logo.svg" alt="Logo Alugue Fácil" width="300">
              </a>
            </div>
            <h5 class="card-title text-center mb-3 fw-light fs-5 green">Usuário criado com sucesso!</h5>
            <p><strong>Nome: </strong> <?php echo ($usuarios->getNome()) ?></p>
            <p><strong>Usuário: </strong><?php echo ($usuarios->getEmail()) ?></p>
            <p><strong>Senha: </strong><?php echo ($usuarios->getSenha()) ?></p>
            <a href="/login.php" class="btn btn-success btn-default">Fazer login na plataforma</a>
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