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
          <img src="imgs/logo.svg" alt="Logo Alugue Fácil" width="180">
        </a>
        <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link text-dark" href="/login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link text-dark" class="btn btn-primary" href="/usuarios/cadastrar.php">Cadastro</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="bg-green py-5">
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

    <div class="container px-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xxl-6">
          <div class="text-center my-5">
            <h1 class="fw-bolder mb-3">O que você precisa?</h1>
            <p class="lead fw-normal text-muted mb-2">Através da nossa plataforma você consegue alugar qualquer coisa diretamente com o proprietário</p>
          </div>
        </div>
      </div>
      <div class="row gx-5 row-cols-2 row-cols-lg-4 py-2">
        <div class="col">
          <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
          <div class="h5 mb-2">Casas</div>
          <p class="text-muted mb-0">Casas para alugar sem necessitar de fiador</p>
        </div>
        <div class="col">
          <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
          <div class="h5">Chácaras</div>
          <p class="text-muted mb-0">Encontre um local para passar o final de semana</p>
        </div>
        <div class="col">
          <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
          <div class="h5">Carros</div>
          <p class="text-muted mb-0">Alugue um carro sem ter que pagar caução.</p>
        </div>
        <div class="col">
          <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
          <div class="h5">Motos</div>
          <p class="text-muted mb-0">Precisa de uma moto? Aqui também você encontra!</p>
        </div>
      </div>
      <br>
    </div>

    <div class="container px-5">
      <section class="py-5">
        <div class="container px-2 my-2">
          <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
              <img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/burocracia.png" alt="Sem burocracias" />
            </div>
            <div class="col-lg-6">
              <h2 class="fw-bolder">Sem burocracias</h2>
              <p class="lead fw-normal text-muted mb-0">Chega de dor de cabeça na hora de encontrar um produto ou serviço para alugar.</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="container px-5">
      <section class="py-5">
        <div class="container px-2 my-2">
          <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last">
              <img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/custos.png" alt="Sem custos" />
            </div>
            <div class="col-lg-6">
              <h2 class="fw-bolder">Sem custos</h2>
              <p class="lead fw-normal text-muted mb-0">Faça seu cadastro e encontre ou divulgue seu produto ou serviço sem custo nenhum.</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="container px-5 my-5">
      <aside class="bg-green bg-gradient rounded-3 p-4 p-sm-5 mt-5">
        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
          <div class="mb-4 mb-xl-0">
            <div class="fs-3 fw-bold text-white">Cadastre-se agora mesmo!</div>
            <div class="text-white-50">Encontre ou divulgue seus produtos e serviços</div>
          </div>
          <div class="ms-xl-4">
            <div class="input-group mb-2">
              <a class="btn btn-outline-light btn-lg px-4" href="/usuarios/cadastrar.php">Cadastrar!</a>
            </div>
          </div>
        </div>
      </aside>
    </div>

  </main>

  <!-- Footer -->
  <?php include 'componentes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>