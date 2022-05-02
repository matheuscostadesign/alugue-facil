<?php

class Anuncios
{
	private $id;
	private $titulo;
	private $descricao;
	private $preco;
	private $foto;

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
		$query = "insert into anuncios values(
		'$this->id',
		'$this->titulo', 
		'$this->descricao',
		'$this->preco',
		'$this->foto')";
		mysqli_query($this->con, $query); // execução da instrução SQL
		mysqli_close($this->con); // fechamento do BD
	}

	// Método Alteração
	public function Alterar()
	{
		$query = "update anuncios set 
		titulo = '$this->titulo', 
		descricao = '$this->descricao',
		preco = '$this->preco',
		foto = '$this->foto'
		where id = '$this->id'";
		mysqli_query($this->con, $query);
		mysqli_close($this->con);
	}

	// Método Exclusão
	public function Excluir()
	{
		$query = "delete from anuncios where id = '$this->id'";
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

	// Título
	public function getTitulo()
	{
		return $this->titulo;
	}
	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;
	}

	// Descrição
	public function getDescricao()
	{
		return $this->descricao;
	}
	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}

	// Preço
	public function getPreco()
	{
		return $this->preco;
	}
	public function setPreco($preco)
	{
		$this->preco = $preco;
	}

	// Foto
	public function getFoto()
	{
		return $this->foto;
	}
	public function setFoto($foto)
	{
		$this->foto = $foto;
	}
}
