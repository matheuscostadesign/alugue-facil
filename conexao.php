<?php

$usuario = 'admin';
$senha = 'admin';
$database = 'locauto';
$host = 'localhost';

$conn = new mysqli($host, $usuario, $senha, $database);

if ($conn->error) {
  die("Falha ao conectar no banco de dados: " . $conn->error);
}
