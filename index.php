<?php
include('Conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {
  if (strlen($_POST['email']) == 0) {
    //echo "Preencha seu e-mail";
    echo "<div class='alert alert-danger' role='alert'>Preencha seu e-mail!</div> ";
  } else if (strlen($_POST['senha']) == 0) {
    //echo "Preencha sua senha";
    echo "<div class='alert alert-danger' role='alert'>Preencha sua senha!</div> ";
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
      echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
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

<body>

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

  <div class="container-fluid ps-md-0">
    <div class="row g-0">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <a href="index.html">
                  <img src="imgs/logo.svg" alt="Logo Alugue Fácil" width="400">
                </a>
                <h3 class="login-heading mb-4">Acesso a plataforma</h3>
                <form action="" method="post" class="text-left">
                  <input placeholder="Email" type="email" name="email" maxlength="45" class="form-control" required><br>
                  <input placeholder="Senha" type="password" name="senha" maxlength="45" class="form-control" required><br>
                  <button class="btn btn-success btn-default" type="submit">Acessar agora!</button>
                  <a href="usuarios/cadastrar.php">Não tem cadastro?</a>
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