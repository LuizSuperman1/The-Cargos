<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$nome = filter_input(INPUT_POST, 'nome-prod', FILTER_SANITIZE_STRING);
$quant = filter_input(INPUT_POST, 'quant-prod', FILTER_SANITIZE_STRING);
$custo = filter_input(INPUT_POST, 'custo-prod', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco-prod', FILTER_SANITIZE_STRING);
$tamanho = filter_input(INPUT_POST, 'tam-prod', FILTER_SANITIZE_STRING);
//$imagem = $_FILES['imagem-prod']['tmp-name'];

/*--if ($imagem != "none") {
    $fp = fopen($imagem, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);

    $queryProd = "INSERT INTO calcas (Nome, Tamanho, Custo, Preco, Quantidade, Imagem) VALUES ('$nome', '$tamanho', '$custo', '$preco', '$quant', '$imagem')";
    $prodResult = mysqli_query($conn, $queryProd) or die("Erro ao cadastrar produto! ");
    echo 'Cadastro concluído com êxito!';
    header('..templates/produto-view.php');
}--*/

$queryProd = "INSERT INTO calcas (Nome, Tamanho, Custo, Preco, Quantidade/*, Imagem*/) VALUES ('$nome', '$tamanho', '$custo', '$preco', '$quant')";
$prodResult = mysqli_query($conn, $queryProd);



header('Location: /the_cargos/templates/produto-view.php');