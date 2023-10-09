<?php

$serverName = "TheCargos.mssql.somee.com";
$databaseName = 'TheCargos';
$uid = 'pongo013_SQLLogin_2';
$pwd = 'wwumx4dco3';

try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$databaseName", $uid, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}