<?php

class Usuarios
{

	private $nome;
	private $email;
	private $senha;

	public $con; // variável para conexão com BD

	// método conecta BD
	public function ConectaBD()
	{
		// conexão com a base de dados MySql 
		$host = "localhost";
		$usuario = "admin";
		$senha = "admin";
		$bd = "locauto";
		$this->con = mysqli_connect($host, $usuario, $senha, $bd);
		return $this->con;
	}

	// método inclusão
	public function Incluir()
	{
		$query = "insert into usuarios values(
		'$this->nome', 
		'$this->email',
		'$this->senha')";
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}

	// método alteração
	// public function Alterar()
	// {
	// 	$query = "update usuarios set 
	// 	nome = '$this->nome', 
	// 	nasc = '$this->nasc' where 
	// 	cnh = '$this->cnh'";
	// 	// execução da instrução SQL
	// 	mysqli_query($this->con, $query);
	// 	// fechamento do BD
	// 	mysqli_close($this->con);
	// }

	// método exclusão
	// public function Excluir()
	// {
	// 	$query = "delete from usuarios where cnh = '$this->cnh'";
	// 	// execução da instrução SQL
	// 	mysqli_query($this->con, $query);
	// 	// fechamento do BD
	// 	mysqli_close($this->con);
	// }

	// ---- getters e setters --------

	// Nome
	public function getNome()
	{
		return $this->nome;
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	// Email
	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}

	// Senha
	public function getSenha()
	{
		return $this->senha;
	}
	public function setSenha($senha)
	{
		$this->senha = $senha;
	}
}
