<?php
include("Usuarios.php");
$usuarios = new Usuarios;

$con = $usuarios->ConectaBD();

$codigo = $_REQUEST["codigo"];

$consulta = "select * from usuarios where id = " . $codigo;
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
                <td>Nome</td>
                <td><input type="text" name="nome" size="30" maxlength="30" required value="<?php echo $dado['nome']; ?>"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="email" size="10" maxlength="10" required value=<?php echo $dado['email']; ?>></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input type="text" name="senha" size="10" maxlength="10" required value=<?php echo $dado['senha']; ?>></td>
            </tr>
            <tr>
                <th><input type="submit" value="Gravar"></th>
    </form>
    <a href="../index.html">Voltar</a>
    </table>

</body>

</html>