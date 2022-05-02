<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
  <div class="container px-5">
    <a class="navbar-brand" href="/painel.php">
      <img src="/imgs/logo.svg" alt="Logo Alugue Fácil" width="160">
    </a>
    <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="/painel.php" class="text-dark">Painel/Home</a>
          </li>
          <li class="nav-item">
            <a href="/anuncios/cadastrar.php" class="text-dark">Cadastrar Anúncio</a>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <form class="form-inline my-2 my-lg-0">
          Bem vindo, <?php echo $_SESSION['nome']; ?>.
          <a href="/logout.php" class="btn-login">Sair</a>
        </form>
      </ul>
    </div>
  </div>
</nav>