<?php
include($_SERVER['DOCUMENT_ROOT'] . '/protect.php');
include("Anuncios.php");
$anuncios = new Anuncios;
$anuncios->setId($_REQUEST["id"]);
$anuncios->setTitulo($_REQUEST["titulo"]);
$anuncios->setDescricao($_REQUEST["descricao"]);
$anuncios->setPreco($_REQUEST["preco"]);
$anuncios->setFoto($_REQUEST["foto"]);
$anuncios->ConectaBD();
$anuncios->Alterar();
?>

<html>

<body>

  <head>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <div>Anúncios - Edição</div>
  <table>
    <tr>
      <th>ID</th>
      <th>Titulo</th>
      <th>Descricao</th>
      <th>Preco</th>
      <th>Foto</th>
    </tr>
    <tr>
      <td><?php echo ($anuncios->getId()) ?></td>
      <td><?php echo ($anuncios->getTitulo()) ?></td>
      <td><?php echo ($anuncios->getDescricao()) ?></td>
      <td><?php echo ($anuncios->getPreco()) ?></td>
      <td><?php echo ($anuncios->getFoto()) ?></td>
    </tr>
  </table>
  <p>

  <div>Usuario alterado com sucesso !!!</div>


</body>

</html>