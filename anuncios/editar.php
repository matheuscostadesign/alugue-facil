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

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <form name="condutores" action="editar-ok.php" method="post">
        <table>
            <tr>
                <th colspan=2>Cadastro de Usuarios - Edição</th>
            </tr>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id" size="15" maxlength="15" readonly value=<?php echo $codigo; ?>></td>
            </tr>
            <tr>
                <td>Título</td>
                <td><input type="text" name="titulo" size="30" maxlength="30" required value="<?php echo $dado['titulo']; ?>"></td>
            </tr>
            <tr>
                <td>Descricao</td>
                <td><input type="text" name="descricao" size="10" maxlength="10" required value=<?php echo $dado['descricao']; ?>></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input type="text" name="preco" size="10" maxlength="10" required value=<?php echo $dado['preco']; ?>></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="text" name="foto" size="10" maxlength="10" required value=<?php echo $dado['foto']; ?>></td>
            </tr>
            <tr>
                <th><input type="submit" value="Gravar"></th>
    </form>
    <a href="../index.html">Voltar</a>
    </table>

</body>

</html>