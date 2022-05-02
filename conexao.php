<?php

// Local Host
$host = 'localhost';
$usuario = 'admin';
$senha = 'admin';
$database = 'dbaluguefacil'; // nome do banco

// Infinity Free
// $host = 'sql301.epizy.com';
// $usuario = 'epiz_31596934';
// $senha = 'gkvsk25Kt4hoxSn';
// $database = 'epiz_31596934_aluguefacil'; // nome do banco

$conn = new mysqli($host, $usuario, $senha, $database);

if ($conn->error) {
  die("Falha ao conectar no banco de dados: " . $conn->error);
}
