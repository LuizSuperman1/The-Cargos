<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$prodid = filter_input(INPUT_POST, 'prod-id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome-prod', FILTER_SANITIZE_STRING);
$quant = filter_input(INPUT_POST, 'quant-prod', FILTER_SANITIZE_STRING);
$custo = filter_input(INPUT_POST, 'custo-prod', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco-prod', FILTER_SANITIZE_STRING);
$tamanho = filter_input(INPUT_POST, 'tam-prod', FILTER_SANITIZE_STRING);

$queryProdEdit = "UPDATE calcas SET Nome = '$nome', Tamanho = '$tamanho', Custo = '$custo', Preco = '$preco', Quantidade = '$quant' WHERE Id_Prod = '$prodid'";
$prodUpdate = mysqli_query($conn, $queryProdEdit) or die("Erro ao editar produto! ");
header('Location: /the_cargos/templates/produto-view.php');