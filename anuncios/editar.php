<?php
include($_SERVER['DOCUMENT_ROOT'] . '/protect.php');
include("Anuncios.php");
$anuncios = new Anuncios;
$con = $anuncios->ConectaBD();
$codigo = $_REQUEST["codigo"]; // Codigo para edicao
$consulta = "select * from anuncios where id = " . $codigo;
$conx = mysqli_query($con, $consulta);
$dado = mysqli_fetch_assoc($conx);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Styles -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/head-styles.php'); ?>

    <!-- Primary Meta Tags -->
    <title>Editar Anúncios - Alugue Fácil</title>
    <meta name="title" content="Editar Anúncios - Alugue Fácil">
    <meta name="description" content="Alugue qualquer coisa, sem burocracias e diretamente com o proprietário">
</head>

<body class="bg-light">

    <!-- Header -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/header.php'); ?>

    <section class="py-5">
        <div class="container px-5">
            <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Editar anúncio</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form action="editar-ok.php" method="post">
                            <div class="form-floating mb-3">
                                <label for="id">ID</label>
                                <input class="form-control" name="id" maxlength="45" type="text" required readonly value=<?php echo $codigo; ?> />
                            </div>
                            <div class="form-floating mb-3">
                                <label for="id">Foto</label>
                                <input class="form-control" name="foto" maxlength="45" type="text" required value=<?php echo $dado['foto']; ?> />
                            </div>
                            <div class=" form-floating mb-3">
                                <label for="titulo">Titulo</label>
                                <input class="form-control" name="titulo" maxlength="45" type="text" required value="<?php echo $dado['titulo']; ?>" />
                            </div>
                            <div class="form-floating mb-3">
                                <div class="col-lg-4 pl-0">
                                    <label for="preco">Preço</label>
                                    <input class="form-control" name="preco" maxlength="45" type="number" required value=<?php echo $dado['preco']; ?> />
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="descricao">Descrição</label>
                                <input class="form-control" name="descricao" type="text" style="height: 8rem" required value=<?php echo $dado['descricao']; ?> />
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-success btn-default btn-lg" type="submit" style="width: 100%;">Alterar Anúncio</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/footer.php'); ?>

    <!-- Scripts -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/body-scripts.php'); ?>

</body>

</html>