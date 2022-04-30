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
                <a href="#">
                  <img src="/imgs/logo.svg" alt="Logo Alugue Fácil" width="400">
                </a>
                <h3 class="login-heading">Cadastrar novo usuário</h3>
                <form action="cadastro-ok.php" method="post" class="text-left">
                  <input placeholder="ID" type="text" name="id" size="30" maxlength="30" placeholder="ID" hidden><br>
                  <input placeholder="Nome" type="text" name="nome" maxlength="45" class="form-control" required><br>
                  <input placeholder="Email" type="text" name="email" maxlength="45" class="form-control" required><br>
                  <input placeholder="Senha" type="password" name="senha" maxlength="45" class="form-control" required><br>
                  <button class="btn btn-success btn-default" type="submit">Cadastrar agora!</button>
                  <span><a href="../index.php">Já tem usuário?</a></span>
                </form>
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