<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white shadow">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/imgs/logo.svg" alt="Logo Alugue Fácil" data-toggle="modal" data-target="#modal">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Todos Anúncios</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          Bem vindo, <?php echo $_SESSION['nome']; ?>.
          <a href="logout.php" class="btn-login">Sair</a>
        </form>
      </div>
    </div>
  </nav>
</header>