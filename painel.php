<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Styles -->
  <?php include 'componentes/head-styles.php'; ?>

  <!-- Primary Meta Tags -->
  <title>Alugue Fácil - Alugue qualquer coisa sem burocracias</title>
  <meta name="title" content="Alugue Fácil - Alugue qualquer coisa sem burocracias">
  <meta name="description" content="Alugue qualquer coisa, sem burocracias e diretamente com o proprietário">
</head>

<body>

  <?php include 'componentes/header.php'; ?>

  Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>.

  <p>
    <a href="logout.php">Sair</a>
  </p>


  <section class="s-hero">
    <div class="container">
      <h1>Alugue qualquer coisa, sem burocracias e diretamente com o proprietário</h1>
      <p>Aluguel de tudo, 24h por dia! 👏</p>
    </div>
  </section>

  <section class="mt-5 mb-5">
    <div class="container pt-5 pb-5 text-center">
      <h2>Nenhum anúncio cadastrado...</h2><br>
      <a href="#" class="btn btn-success btn-default">Novo anúncio</a>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'componentes/footer.php'; ?>

  <!-- Scripts -->
  <?php include 'componentes/body-scripts.php'; ?>

</body>

</html>