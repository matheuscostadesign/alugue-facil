<?php
include('Conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {
  if (strlen($_POST['email']) == 0) {
    //echo "Preencha seu e-mail";
    echo "<div class='alert alert-danger text-center' role='alert'>Preencha seu e-mail!</div> ";
  } else if (strlen($_POST['senha']) == 0) {
    //echo "Preencha sua senha";
    echo "<div class='alert alert-danger text-center' role='alert'>Preencha sua senha!</div> ";
  } else {
    $email = $conn->real_escape_string($_POST['email']);
    $senha = $conn->real_escape_string($_POST['senha']);
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
      $usuario = $sql_query->fetch_assoc();
      if (!isset($_SESSION)) {
        session_start();
      }
      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];
      header("Location: painel.php");
    } else {
      //echo "Falha ao logar! E-mail ou senha incorretos";
      echo "<div class='alert alert-danger text-center' role='alert'>E-mail ou senha incorretos!</div> ";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Styles -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/head-styles.php'); ?>

  <!-- Primary Meta Tags -->
  <title>Login - Alugue Fácil</title>
  <meta name="title" content="Alugue Fácil - Alugue qualquer coisa sem burocracias">
  <meta name="description" content="Alugue qualquer coisa, sem burocracias e diretamente com o proprietário">
</head>

<body class="bg-green">

  <!-- <h1>Acesse sua conta</h1>
  <form action="" method="POST">
    <p>
      <label>E-mail</label>
      <input type="text" name="email">
    </p>
    <p>
      <label>Senha</label>
      <input type="password" name="senha">
    </p>
    <p>
      <button type="submit">Entrar</button>
    </p>
  </form>

  <a href="usuarios/cadastrar.php">Cadastrar usuario</a> <br><br> -->

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex bg-green">
          </div>
          <div class="card-body p-4 p-sm-5">
            <div class="logo text-center mb-2">
              <a href="/index.php">
                <img src="/imgs/logo.svg" alt="Logo Alugue Fácil" width="300">
              </a>
            </div>
            <h5 class="card-title text-center mb-5 fw-light fs-5">Acesso a plataforma</h5>
            <form action="" method="POST">
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" placeholder="Seu e-mail" required autofocus>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="senha" class="form-control" placeholder="Senha" required>
              </div>
              <div class="d-grid mb-2 text-center">
                <button class="btn btn-success btn-default" style="width: 100%;" type="submit">Acessar</button>
              </div>
              <hr class="my-4">
              <a href="/usuarios/cadastrar.php" class="d-block text-center mt-2">Deseja se cadastrar? Clique aqui</a>
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