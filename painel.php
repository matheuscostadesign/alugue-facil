<?php
include($_SERVER['DOCUMENT_ROOT'] . '/protect.php');
include($_SERVER['DOCUMENT_ROOT'] . '/anuncios/Anuncios.php');

$anuncios = new Anuncios;
$con = $anuncios->ConectaBD();
$consulta = "select * from anuncios";
$conx = mysqli_query($con, $consulta);
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

  <link href="css/theme.css" rel="stylesheet" />
</head>

<body>

  <?php include 'componentes/header.php'; ?>

  <section class="s-hero">
    <div class="container">
      <h1>Alugue qualquer coisa, sem burocracias e diretamente com o proprietário</h1>
      <p>Aluguel de tudo, 24h por dia! 👏</p>
    </div>
  </section>

  <!-- <section class="mt-5 mb-5">
    <div class="container pt-5 pb-5 text-center">
      <h2>Nenhum anúncio cadastrado...</h2><br>
      <a href="#" class="btn btn-success btn-default">Novo anúncio</a>
    </div>
  </section> -->


  <?php while ($dado = mysqli_fetch_assoc($conx)) { ?>
    <p><?php echo $dado['id']; ?></p>
    <p><?php echo $dado['titulo']; ?></p>
    <p><?php echo $dado['descricao']; ?></p>
    <p><?php echo $dado['preco']; ?></p>
    <p><?php echo $dado['foto']; ?></p>
    <a href="editar.php?codigo=<?php echo $dado['id']; ?>">Editar</a>
    <a href="deletar.php?codigo=<?php echo $dado['id']; ?>" onclick="return confirm('Confirma exclusão?')">Excluir</a>
  <?php } ?>

  <!-- Footer -->
  <?php include 'componentes/footer.php'; ?>

  <!-- Scripts -->
  <?php include 'componentes/body-scripts.php'; ?>

</body>

</html>