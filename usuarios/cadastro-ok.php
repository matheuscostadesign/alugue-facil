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

<body>

  <div class="container-fluid ps-md-0">
    <div class="row g-0">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <a href="index.html">
                  <img src="/imgs/logo.svg" alt="Logo Alugue Fácil" width="400">
                </a>
                <h3 class="login-heading green">Usuário criado com sucesso!</h3>
                <p>Dados de acesso:</p>
                <p><strong>Nome: </strong> <?php echo ($usuarios->getNome()) ?></p>
                <p><strong>Usuário: </strong><?php echo ($usuarios->getEmail()) ?></p>
                <p><strong>Senha: </strong><?php echo ($usuarios->getSenha()) ?></p>
                <a href="/index.php" class="btn btn-primary">Faça o login para acessar a plataforma</a>
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