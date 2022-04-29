<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>

<body>

  <h1>Cadastrar novo usuário</h1>

  <form name="condutores" action="cadastro-ok.php" method="post">
    <input type="text" name="id" size="30" maxlength="30" placeholder="ID" hidden> <br><br>
    <input type="text" name="nome" size="30" maxlength="30" placeholder="Nome" required> <br><br>
    <input type="text" name="email" size="30" maxlength="30" placeholder="E-mail" required> <br><br>
    <input type="text" name="senha" size="30" maxlength="30" placeholder="Senha" required> <br><br>
    <button type="submit" name="butinc" value="Gravar">Cadastrar</button>
  </form>

</body>

</html>