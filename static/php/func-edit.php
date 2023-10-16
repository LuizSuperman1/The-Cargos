<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$funcid = $_POST['func-id'];
$email = $_POST['email-func'];
$senha = $_POST['senha-func'];
$acesso = $_POST['acesso-func'];

$queryProdEdit = "UPDATE admin SET Email='$email', Senha='$senha', Acesso='$acesso' WHERE Id_Adm='$funcid'";
$prodUpdate = $conn->prepare($queryProdEdit);
$prodUpdate->execute();

if ($prodUpdate) {
    print "<script>alert('Editado com sucesso!')</script>";
    print "<script>location.href='/the_cargos/templates/funcionario-view.php'</script>";
} else {
    print "<script>alert('Falha ao editar!')</script>";
    print "<script>location.href='/the_cargos/templates/funcionario-view.php'</script>";
}