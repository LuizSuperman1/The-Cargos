<?php

$serverName = 'TheCargos1.mssql.somee.com';
$databaseName = 'TheCargos1';
$uid = 'pongo113_SQLLogin_1';
$pwd = 'simnm2eglq';

try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$databaseName", $uid, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}