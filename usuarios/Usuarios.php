<?php

class Usuarios
{
	private $id;
	private $nome;
	private $email;
	private $senha;

	public $con; // variável para conexão com BD

	// Conexão BD - Local Host
	// public function ConectaBD()
	// {
	// 	$host = "localhost";
	// 	$usuario = "admin";
	// 	$senha = "admin";
	// 	$bd = "dbaluguefacil"; // nome do banco
	// 	$this->con = mysqli_connect($host, $usuario, $senha, $bd);
	// 	return $this->con;
	// }

	// Conexão BD - Infinity Free
	public function ConectaBD()
	{
		$host = "sql301.epizy.com";
		$usuario = "epiz_31596934";
		$senha = "gkvsk25Kt4hoxSn";
		$bd = "epiz_31596934_aluguefacil"; // nome do banco
		$this->con = mysqli_connect($host, $usuario, $senha, $bd);
		return $this->con;
	}

	// Método Inclusão
	public function Incluir()
	{
		$query = "insert into usuarios values(
		'$this->id',
		'$this->nome', 
		'$this->email',
		'$this->senha')";
		mysqli_query($this->con, $query); // execução da instrução SQL
		mysqli_close($this->con); // fechamento do BD
	}

	// Método Alteração
	public function Alterar()
	{
		$query = "update usuarios set 
		nome = '$this->nome', 
		email = '$this->email',
		senha = '$this->senha'
		where id = '$this->id'";
		mysqli_query($this->con, $query);
		mysqli_close($this->con);
	}

	// Método Exclusão
	public function Excluir()
	{
		$query = "delete from usuarios where id = '$this->id'";
		mysqli_query($this->con, $query);
		mysqli_close($this->con);
	}

	// Getters e Setters

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
