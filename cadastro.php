<?php

include_once './conexao.php';

try {

  if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $acao = $_POST['acao'];

    $id = (int) $id;
    $acao = (int) $acao;

    //$conn = mysqli_connect('localhost:3306', 'root', 'admin', 'sistema') or die('Erro ao conectar ao banco de dados');

    echo "<br>";

    if ($acao == 1) {

      $sql = "INSERT INTO usuarios VALUES ($id, '$nome', '$email', '$senha');";
      if (mysqli_query($conn, $sql)) {
        echo "Cadastrado";
      } else {
        echo "ERRO " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    if ($acao == 2) {

      $sql = "DELETE FROM usuarios WHERE id=$id ";
      if (mysqli_query($conn, $sql)) {
        echo "Dados do código: $id - Deletados ";
      } else {
        echo "ERRO " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    if ($acao == 3) {
      $sql = "UPDATE usuarios SET nome='$nome' WHERE id=$id";
      if (mysqli_query($conn, $sql)) {
        echo "Editados com sucesso";
      } else {
        echo "ERRO " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    mysqli_close($conn);
  }
} catch (Exception $e) {
  echo 'Erro: ',  $e->getMessage(), "\n";
} finally {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form name="frm" id="frm" action="cadastro.php" method="post">

    <label class="form-label">ID:</label>
    <input type="text" id="id" name="id" class="form-control" value="">
    <br>

    <label class="form-label">Nome:</label>
    <input type="text" id="nome" name="nome" class="form-control" value="">
    <br>

    <label class="form-label">Email:</label>
    <input type="text" id="email" name="email" class="form-control" value="">
    <br>

    <label class="form-label">Senha:</label>
    <input type="text" id="senha" name="senha" class="form-control" value="">
    <br>

    <button type="submit" class="btn btn-primary" Onclick="enviar(1)">Cadastrar</button>

    <input type="button" value="Excluir" Onclick="enviar(2)">
    <input type="button" value="Editar" Onclick="enviar(3)">
    <input type="reset" value="Limpar">


    <br><br>

    <input type="hidden" value="0" id="acao" name="acao">
    <input type="hidden" value="-1" id="id" name="id">

    <script>
      var dados;

      function enviar(acao) {
        document.getElementById('acao').value = acao;
        document.getElementById("frm").submit();
      }
    </script>

  </form>

</body>

</html>