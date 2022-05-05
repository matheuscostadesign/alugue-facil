<?php
include($_SERVER['DOCUMENT_ROOT'] . '/anuncios/Anuncios.php');

$anuncios = new Anuncios;
$con = $anuncios->ConectaBD();
$consulta = "SELECT * FROM `anuncios` order by id DESC LIMIT 3";
$conx = mysqli_query($con, $consulta);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://metatags.io/">
  <meta property="og:title" content="Alugue Fácil - Alugue qualquer coisa sem burocracias">
  <meta property="og:description" content="Alugue qualquer coisa diretamente com o proprietário">
  <meta property="og:image" content="https://projetos-senai.netlify.app/uc08/projeto-integrador/alugue-facil/imgs/og-image.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://metatags.io/">
  <meta property="twitter:title" content="Alugue Fácil - Alugue qualquer coisa sem burocracias">
  <meta property="twitter:description" content="Alugue qualquer coisa diretamente com o proprietário">
  <meta property="twitter:image" content="https://projetos-senai.netlify.app/uc08/projeto-integrador/alugue-facil/imgs/og-image.png">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="/imgs/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/imgs/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/imgs/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/imgs/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/imgs/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/imgs/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/imgs/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/imgs/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/imgs/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/imgs/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/imgs/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/imgs/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/imgs/favicon/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#00ab44">
  <meta name="msapplication-TileImage" content="/imgs/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#00ab44">

  <!-- Styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/theme.css" />
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/responsive.css">

  <title>Alugue Fácil - Alugue qualquer coisa sem burocracias</title>
  <meta name="title" content="Alugue Fácil - Alugue qualquer coisa sem burocracias">
  <meta name="description" content="Alugue qualquer coisa, sem burocracias e diretamente com o proprietário">
  <meta name="author" content="Matheus Costa" />

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
        <div class="col text-center mb-4">
          <div class="feature text-white rounded-3 mb-3">
            <img src="/assets/casas.png" alt="Casas">
          </div>
          <div class="h5 mb-2 bolder">Casas</div>
          <!-- <p class="text-muted mb-0 small">Casas para alugar sem necessitar de fiador</p> -->
        </div>
        <div class="col text-center">
          <div class="feature text-white rounded-3 mb-3">
            <img src="/assets/chacaras.png" alt="Chácaras">
          </div>
          <div class="h5">Chácaras</div>
          <!-- <p class="text-muted mb-0 small">Encontre um local para passar o final de semana</p> -->
        </div>
        <div class="col text-center">
          <div class="feature text-white rounded-3 mb-3">
            <img src="/assets/carros.png" alt="Carros">
          </div>
          <div class="h5">Carros</div>
          <!-- <p class="text-muted mb-0 small">Alugue um carro sem ter que pagar caução.</p> -->
        </div>
        <div class="col text-center">
          <div class="feature text-white rounded-3 mb-3">
            <img src="/assets/motos.png" alt="Motos">
          </div>
          <div class="h5">Motos</div>
          <!-- <p class="text-muted mb-0 small">Precisa de uma moto? Aqui também você encontra!</p> -->
        </div>
      </div>

      <div class="row justify-content-center mb-5 mt-5">
        <div class="col-lg-8 col-xxl-6 col-sm-12">
          <div class="text-center">
            <h1 class="fw-bolder ">Últimos itens anúnciados</h1>
            <p class="lead fw-normal text-muted mb-2">Confira os itens recentes adicionados na plataforma</p>
          </div>
        </div>
      </div>
      <div class="row gx-5">
        <?php while ($dado = mysqli_fetch_assoc($conx)) { ?>
          <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
              <div class="img-anuncio text-center">
                <img src='/anuncios/fotos/<?php echo $dado['foto']; ?>' alt="Foto anúncio" style="width: 300px; height: 175px; object-fit: contain;">
              </div>
              <div class="card-body p-4">
                <h5 class="card-title mb-3 text-center">
                  <?php echo $dado['titulo']; ?>
                </h5>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

      <aside class="bg-green bg-gradient rounded-3 p-4 p-sm-5">
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
      <br>

      <div class="mt-3 text-center">
        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/YyMormDc3xY"></iframe>
      </div>

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
              <p class="lead fw-normal text-muted mb-0">Chega de dor de cabeça na hora de encontrar um produto ou serviço para alugar.
              </p>
              <p class="lead fw-normal text-muted mb-0 mt-4">
                Encontre facilmente qualquer produto e negocie diretamente com o proprietário de forma fácil e rápida.
              </p>
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
              <p class="lead fw-normal text-muted mb-0 mt-4">
                Nossa plataforma é totalmente gratuita e não contém nenhum tipo de anúncio.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>



  </main>

  <!-- Footer -->
  <?php include 'componentes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>