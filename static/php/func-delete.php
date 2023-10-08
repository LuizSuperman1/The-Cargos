<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$admid = $_REQUEST['id'];

$queryProdDelete = "DELETE FROM admin WHERE Id_Adm = '$admid'";
$prodUpdate = $conn->prepare($queryProdDelete);
$prodUpdate->execute();

if ($prodUpdate) {
    print "<script>alert('Deletado com sucesso!')</script>";
    print "<script>location.href='/the_cargos/templates/funcionario-view.php'</script>";
} else {
    print "<script>alert('Falha ao deletar!')</script>";
    print "<script>location.href='/the_cargos/templates/funcionario-view.php'</script>";
}