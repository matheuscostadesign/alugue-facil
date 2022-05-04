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
      <div class="text">
        <h1>Alugue qualquer coisa diretamente com o proprietário</h1>
        <p>Aluguel de tudo, 24h por dia! 👏</p>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container px-5 my-5">
      <div class="row gx-5">
        <?php while ($dado = mysqli_fetch_assoc($conx)) { ?>
          <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
              <img class="card-img-top" src="/anuncios/fotos/padrao.png" alt="Foto anúncio" width="600" height="350" style="object-fit: cover;" />
              <!-- <//?php echo $dado['foto']; ?> -->
              <div class="card-body p-4">
                <!-- <div class="badge bg-primary bg-gradient rounded-pill mb-2">
                  <//?php echo $dado['id']; ?>
                </div> -->
                <h5 class="card-title mb-3">
                  <?php echo $dado['titulo']; ?>
                </h5>
                <p class="card-text mb-0">
                  <?php echo $dado['descricao']; ?>
                </p>
                <h5 class="card-title mb-3 mt-3 green">
                  <strong><span class="mr-1">R$</span><?php echo $dado['preco']; ?></strong>
                </h5>
                <a class="btn btn-primary" href="/anuncios/editar.php?codigo=<?php echo $dado['id']; ?>">Editar</a>
                <a class="btn btn-danger" href="/anuncios/deletar.php?codigo=<?php echo $dado['id']; ?>" onclick="return confirm('Confirma exclusão?')">Excluir</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'componentes/footer.php'; ?>

  <!-- Scripts -->
  <?php include 'componentes/body-scripts.php'; ?>

</body>

</html>