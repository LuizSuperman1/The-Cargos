<?php

$serverName = "TheCargos.mssql.somee.com";
$databaseName = 'TheCargos';
$uid = 'pongo013_SQLLogin_1';
$pwd = '5uwmp9opl8';

try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$databaseName", $uid, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}