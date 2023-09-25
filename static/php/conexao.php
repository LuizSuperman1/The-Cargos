<?php

$usuario = 'root';
$senha = '';
$database = 'the_cargos';
$host = 'localhost';

$conn = mysqli_connect($host, $usuario, $senha, $database);
$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados " . $mysqli->error);
}