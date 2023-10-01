<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$ender = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios (Nome, User, Senha, Email, Telefone, Endereco, CPF) VALUES ('$nome', '$user', '$senha', '$email', '$telefone', '$ender', '$cpf')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if ($result_usuario==TRUE) {
    print "<script>alert('Cadastrado com sucesso!')</script>";
    print "<script>location.href='../templates/catalogo.php'</script>";
} else {
    print "<script>alert('Falha ao cadastrar!')</script>";
    print "<script>location.href='../templates/cadastro.php'</script>";
}