<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$email = $_POST['email-func'];
$acesso = $_POST['acesso-func'];
$senha = $_POST['senha-func'];

$queryProd = "INSERT INTO admin (Email, Acesso, Senha) VALUES ('$email', '$acesso', '$senha')";
$prodResult = $conn->prepare($queryProd);
$prodResult->execute();

if ($prodResult) {
    print "<script>alert('Cadastrado com sucesso!')</script>";
    print "<script>location.href='/the_cargos/templates/produto-view.php'</script>";
} else {
    print "<script>alert('Falha ao cadastrar!')</script>";
    print "<script>location.href='/the_cargos/templates/produto-view.php'</script>";
}