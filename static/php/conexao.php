<?php

$usuario = 'id21294678_thecargos';
$senha = 'TheCargos.2023';
$database = 'id21294678_bancothecargos';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados " . $mysqli->error);
}