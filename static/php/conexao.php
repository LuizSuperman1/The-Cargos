<?php

$usuario = 'pongo013_SQLLogin_1';
$senha = '5uwmp9opl8';
$database = 'TheCargos';
$host = 'TheCargos.mssql.somee.com';

$conn = mysqli_connect($host, $usuario, $senha, $database);

if ($conn->error) {
    die("Falha ao conectar ao banco de dados " . $conn->error);
}