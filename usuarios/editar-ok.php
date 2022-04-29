<?php
include("Usuarios.php");
$usuarios = new Usuarios;
$usuarios->setId($_REQUEST["id"]);
$usuarios->setNome($_REQUEST["nome"]);
$usuarios->setEmail($_REQUEST["email"]);
$usuarios->setSenha($_REQUEST["senha"]);
$usuarios->ConectaBD();
$usuarios->Alterar();
?>

<html>

<body>

  <head>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <div>Cadastro de Usuarios - Edição</div>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Senha</th>
    </tr>
    <tr>
      <td><?php echo ($usuarios->getId()) ?></td>
      <td><?php echo ($usuarios->getNome()) ?></td>
      <td><?php echo ($usuarios->getEmail()) ?></td>
      <td><?php echo ($usuarios->getSenha()) ?></td>
    </tr>
  </table>
  <p>

  <div>Usuario alterado com sucesso !!!</div>


</body>

</html>