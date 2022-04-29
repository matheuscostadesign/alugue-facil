<?php
include("Usuarios.php");
$usuarios = new Usuarios;
$con = $usuarios->ConectaBD();
$usuarios->setId($_REQUEST["codigo"]); // codigo para deletar
$usuarios->Excluir();
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
    <div>Cadastro de Usuarios - Exclusão</div>
    <br><br>
    <div>Usuario <?php echo $usuarios->getNome(); ?> excluído com sucesso</div>
    <br><br>
    <a href="../index.html">Voltar</a>
</body>

</html>