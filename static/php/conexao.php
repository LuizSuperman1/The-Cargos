<?php

/* $serverName = "TheCargos.mssql.somee.com";
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
} */

$serverName = "TheCargos.mssql.somee.com";
$databaseName = 'TheCargos';
$uid = 'pongo013_SQLLogin_1';
$pwd = '5uwmp9opl8';

try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$databaseName", $uid, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão bem-sucedida!";

} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}