<?php

$usuario = 'admin'; // Usuario banco
$senha = 'admin'; // senha
$database = 'dbaluguefacil';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
  die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
