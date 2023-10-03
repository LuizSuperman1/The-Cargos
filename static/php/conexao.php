<?php

$serverName = "TheCargos.mssql.somee.com";
$database = 'TheCargos';
$uid = 'pongo013_SQLLogin_1';
$pass = '5uwmp9opl8';

$connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
];

$conn = sqlsrv_connect($serverName, $connection);
if (!$conn) {
    echo 'Conexao falha!';
    die(print_r(sqlsrv_errors(), true));
}