<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="estilos.css">
</head>

<body>
  <form name="condutores" action="cadastro-ok.php" method="post">
    <table>
      <tr>
        <th colspan=2>Cadastro de Usuarios</th>
      </tr>

      <tr>
        <td>ID</td>
        <td><input type="text" name="id" size="30" maxlength="30" required></td>
      </tr>

      <tr>
        <td>Nome</td>
        <td><input type="text" name="nome" size="30" maxlength="30" required></td>
      </tr>

      <tr>
        <td>E-mail</td>
        <td><input type="text" name="email" size="30" maxlength="30" required></td>
      </tr>

      <tr>
        <td>Senha</td>
        <td><input type="text" name="senha" size="30" maxlength="30" required></td>
      </tr>

      <tr>
        <th>
          <input type="submit" name="butinc" value="Gravar">
        </th>

  </form>
  <form name="volta" action="index.html" method="get">
    <th>
      <a href="../index.html">Voltar</a>
    </th>
    </tr>
    </table>
  </form>
</body>

</html>