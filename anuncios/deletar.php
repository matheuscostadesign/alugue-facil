<?php
include($_SERVER['DOCUMENT_ROOT'] . '/protect.php');
include("Anuncios.php");
$anuncios = new Anuncios;
$con = $anuncios->ConectaBD();
$anuncios->setId($_REQUEST["codigo"]); // codigo para deletar
$anuncios->Excluir();
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
    <div>Anuncios - Exclusão</div>
    <br><br>
    <div>Anuncio <?php echo $anuncios->getTitulo(); ?> excluído com sucesso</div>
    <br><br>
    <a href="../index.html">Voltar</a>
</body>

</html>