<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$prodid = filter_input(INPUT_POST, 'prod-id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome-prod', FILTER_SANITIZE_STRING);
$quant = filter_input(INPUT_POST, 'quant-prod', FILTER_SANITIZE_NUMBER_INT);
$custo = filter_input(INPUT_POST, 'custo-prod', FILTER_SANITIZE_NUMBER_INT);
$preco = filter_input(INPUT_POST, 'preco-prod', FILTER_SANITIZE_NUMBER_INT);
$tamanho = filter_input(INPUT_POST, 'tam-prod', FILTER_SANITIZE_STRING);

$queryProdEdit = "UPDATE calcas SET Nome='$nome',Tamanho='$tamanho',Custo='$custo',Preco='$preco',Quantidade='$quant' WHERE Id_Prod='$prodid'";
$prodUpdate = $conn->prepare($queryProdEdit);
$prodUpdate->execute();

if ($prodRow==1) {
    print "<script>alert('Editado com sucesso!')</script>";
    print "<script>location.href='/the_cargos/templates/produto-view.php'</script>";
} else {
    print "<script>alert('Falha ao editar!')</script>";
    print "<script>location.href='/the_cargos/templates/produto-view.php'</script>";
}