<?php
include($_SERVER['DOCUMENT_ROOT'] . '/protect.php');
include("Anuncios.php");
$anuncios = new Anuncios;
$con = $anuncios->ConectaBD();
$consulta = "select * from anuncios";
$conx = mysqli_query($con, $consulta);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estilos.css">
</head>

<body>
  <div>Listagem de anúncios</div>


  <table>
    <tr>
      <th>ID</th>
      <th>Título</th>
      <th>Descrição</th>
      <th>Preço</th>
      <th>Foto</th>
    </tr>
    <?php while ($dado = mysqli_fetch_assoc($conx)) { ?>
      <tr>
        <td><?php echo $dado['id']; ?></td>
        <td><?php echo $dado['titulo']; ?></td>
        <td><?php echo $dado['descricao']; ?></td>
        <td><?php echo $dado['preco']; ?></td>
        <td><?php echo $dado['foto']; ?></td>
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