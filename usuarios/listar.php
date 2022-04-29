<?php
include("Usuarios.php");
$usuarios = new Usuarios;
$con = $usuarios->ConectaBD();
$consulta = "select * from usuarios";
$conx = mysqli_query($con, $consulta);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estilos.css">
</head>

<body>
  <div>Listagem de usuários</div>


  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Senha</th>
    </tr>
    <?php while ($dado = mysqli_fetch_assoc($conx)) { ?>
      <tr>
        <td><?php echo $dado['id']; ?></td>
        <td><?php echo $dado['nome']; ?></td>
        <td><?php echo $dado['email']; ?></td>
        <td><?php echo $dado['senha']; ?></td>
        <!-- <td><//?php echo date('d/m/Y', strtotime($dado['nasc'])); ?></td> -->

        <td>
          <a href="editar.php?codigo=<?php echo $dado['id']; ?>">Editar</a>
          <a href="deletar.php?codigo=<?php echo $dado['id']; ?>" onclick="return confirm('Confirma exclusão?')">Excluir</a>
        </td>
      </tr>
    <?php } ?>

  </table>

</body>

</html>