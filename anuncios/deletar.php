<?php
include($_SERVER['DOCUMENT_ROOT'] . '/protect.php');
include("Anuncios.php");
$anuncios = new Anuncios;
$con = $anuncios->ConectaBD();
$anuncios->setId($_REQUEST["codigo"]); // codigo para deletar
$anuncios->Excluir();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Styles -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/head-styles.php'); ?>

    <!-- Primary Meta Tags -->
    <title>Editar Anúncios - Alugue Fácil</title>
    <meta name="title" content="Alugue Fácil - Alugue qualquer coisa sem burocracias">
    <meta name="description" content="Alugue qualquer coisa, sem burocracias e diretamente com o proprietário">
</head>

<body class="bg-light">

    <!-- Header -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/componentes/header.php'); ?>

    <section class="py-5">
        <div class="container">
            <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder green">Anúncio excluído <br>com sucesso!</h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="form-floating mb-3 text-center">
                            <p>Anúncio com o ID
                                "<strong><?php echo $anuncios->getId(); ?></strong>"
                                excluído com sucesso.
                            </p>
                        </div>
                        <div class="d-grid">
                            <a href="/painel.php" class="btn btn-primary btn-lg" style="width: 100%;">Voltar</a>
                        </div>
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