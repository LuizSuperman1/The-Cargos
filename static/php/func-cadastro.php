<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$email = $_POST['email-func'];
$senha = $_POST['senha-func'];

$queryProd = "INSERT INTO admin (Email, Senha) VALUES ('$email', '$senha')";
$prodResult = $conn->prepare($queryProd);
$prodResult->execute();

if ($prodResult) {
    print "<script>alert('Cadastrado com sucesso!')</script>";
    print "<script>location.href='/the_cargos/templates/funcionario-view.php'</script>";
} else {
    print "<script>alert('Falha ao cadastrar!')</script>";
    print "<script>location.href='/the_cargos/templates/funcionario-view.php'</script>";
}