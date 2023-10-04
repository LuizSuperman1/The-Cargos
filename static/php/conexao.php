<?php

$usuario = 'root';
$senha = '';
$database = 'the_cargos';
$host = 'localhost';

$conn = mysqli_connect($host, $usuario, $senha, $database);

if ($conn->error) {
    die("Falha ao conectar ao banco de dados " . $conn->error);
}