<?php
include("Usuarios.php");
$usuarios = new Usuarios;
$usuarios->setId($_REQUEST["id"]);
$usuarios->setNome($_REQUEST["nome"]);
$usuarios->setEmail($_REQUEST["email"]);
$usuarios->setSenha($_REQUEST["senha"]);
$usuarios->ConectaBD();
$usuarios->Incluir();
?>

<html>

<body>

  <head>

  </head>
  <div>Cadastro de Usuarios</div>
  <table>
    <tr>
      <!-- <th>ID</th> -->
      <th>Nome</th>
      <th>E-mail</th>
      <th>Senha</th>
    </tr>
    <tr>
      <!-- <td><//?php echo ($usuarios->getId()) ?></td> -->
      <td><?php echo ($usuarios->getNome()) ?></td>
      <td><?php echo ($usuarios->getEmail()) ?></td>
      <td><?php echo ($usuarios->getSenha()) ?></td>
    </tr>
  </table>
  <p>

  <div>Usuário incluído com sucesso !!!</div>

  <p></p>

  <a href="../index.php">Voltar</a>

</body>

</html>