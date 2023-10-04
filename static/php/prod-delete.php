<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$prodid = $_REQUEST['id'];

$queryProdDelete = "DELETE FROM calcas WHERE Id_Prod = '$prodid'";
$prodUpdate = $conn->prepare($queryProdDelete);
$prodUpdate->execute();

if ($prodUpdate) {
    print "<script>alert('Deletado com sucesso!')</script>";
    print "<script>location.href='/the_cargos/templates/produto-view.php'</script>";
} else {
    print "<script>alert('Deletado com sucesso!')</script>";
    print "<script>location.href='/the_cargos/templates/produto-view.php'</script>";
}