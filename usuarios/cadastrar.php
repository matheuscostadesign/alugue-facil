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
              <a href="../index.php">
                <img src="/imgs/logo.svg" alt="Logo Alugue Fácil" width="300">
              </a>
            </div>
            <h5 class="card-title text-center mb-5 fw-light fs-5">Cadastro de usuário</h5>
            <form action="cadastro-ok.php" method="POST">
              <div class="form-floating mb-3">
                <input placeholder="ID" type="text" name="id" size="30" maxlength="30" placeholder="ID" hidden>
              </div>
              <div class="form-floating mb-3">
                <input placeholder="Nome" type="text" name="nome" maxlength="15" class="form-control" required>
              </div>
              <div class="form-floating mb-3">
                <input placeholder="Seu melhor e-mail" type="email" name="email" maxlength="45" class="form-control" required>
              </div>
              <div class="form-floating mb-3">
                <input placeholder="Senha de acesso" type="password" name="senha" maxlength="45" class="form-control" required>
              </div>
              <div class="d-grid mb-2 text-center">
                <button class="btn btn-success btn-default" style="width: 100%;" type="submit">Cadastrar agora!</button>
              </div>
              <hr class="my-4">
              <a href="../login.php" class="d-block text-center mt-2">Já tem usuário? Clique aqui</a>
            </form>
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