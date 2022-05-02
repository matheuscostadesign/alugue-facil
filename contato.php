<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Styles -->
  <?php include 'componentes/head-styles.php'; ?>

  <title>Alugue Fácil - Alugue qualquer coisa sem burocracias</title>
  <meta name="title" content="Alugue Fácil - Alugue qualquer coisa sem burocracias">
  <meta name="description" content="Alugue qualquer coisa, sem burocracias e diretamente com o proprietário">
  <meta name="author" content="Matheus Costa" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="css/theme.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
      <div class="container px-5">
        <a class="navbar-brand" href="index.php">
          <img src="imgs/logo.svg" alt="Logo Alugue Fácil" width="160">
        </a>
        <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link text-dark" href="/login.php">Login</a></li>
          </ul>
          <a href="/usuarios/cadastrar.php" class="btn btn-success btn-default">Cadastrar-se</a>
        </div>
      </div>
    </nav>
    <header class="bg-green py-5 ">
      <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
          <div class="col-lg-8 col-xl-7 col-xxl-6">
            <div class="my-5 text-center text-xl-start">
              <h1 class="display-5 fw-bolder text-white mb-2">Alugue qualquer coisa sem burocracias!</h1>
              <p class="lead fw-normal text-white mb-4">Encontre qualquer tipo de produto ou serviço</p>
              <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                <a class="btn btn-outline-light btn-lg px-4" href="/usuarios/cadastrar.php">Quero anunciar!</a>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
            <img class="img-fluid rounded-3 my-5" src="/assets/hero.png" alt="Alugue Fácil" />
          </div>
        </div>
      </div>
    </header>

    <div class="container text-center mt-5 mb-5">
      <h1>Entre em contato conosco</h1><br>
      <h3>matheuscostadosantos@hotmail.com</h3><br>
      <h3>(17) 99214-3072</h3>
    </div>
  </main>

  <!-- Footer -->
  <?php include 'componentes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>