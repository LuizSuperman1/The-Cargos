<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$prodid = $_POST['prod-id'];
$nome = $_POST['nome-prod'];
$modelo = $_POST['model-prod'];
$quant = $_POST['quant-prod'];
$custo = $_POST['custo-prod'];
$preco = $_POST['preco-prod'];
$tamanho = $_POST['tam-prod'];

$queryProdEdit = "UPDATE calcas SET Nome='$nome',Modelo='$modelo',Tamanho='$tamanho',Custo='$custo',Preco='$preco',Quantidade='$quant' WHERE Id_Prod='$prodid'";
$prodUpdate = $conn->prepare($queryProdEdit);
$prodUpdate->execute();

if ($prodUpdate) {
    print "<script>alert('Editado com sucesso!')</script>";
    print "<script>location.href='/the_cargos/templates/produto-view.php'</script>";
} else {
    print "<script>alert('Falha ao editar!')</script>";
    print "<script>location.href='/the_cargos/templates/produto-view.php'</script>";
}