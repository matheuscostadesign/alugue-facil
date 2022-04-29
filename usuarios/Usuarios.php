<?php

class Usuarios
{
	private $id;
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
		'$this->id',
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
	// 	id = '$this->id', 
	// 	nome = '$this->nome', 
	// 	email = '$this->email' where 
	// 	senha = '$this->senha'";
	// 	// execução da instrução SQL
	// 	mysqli_query($this->con, $query);
	// 	// fechamento do BD
	// 	mysqli_close($this->con);
	// }

	// método alteração
	public function Alterar()
	{
		$query = "update usuarios set 
		nome = '$this->nome', 
		email = '$this->email',
		senha = '$this->senha'
		where id = '$this->id'";
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}

	// método exclusão
	public function Excluir()
	{
		$query = "delete from usuarios where id = '$this->id'";
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}

	// ---- getters e setters --------

	// ID
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}

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
