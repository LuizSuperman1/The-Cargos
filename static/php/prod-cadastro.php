<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('conexao.php');

$nome = $_POST['nome-prod'];
$quant = $_POST['quant-prod'];
$custo = $_POST['custo-prod'];
$preco = $_POST['preco-prod'];
$tamanho = $_POST['tam-prod'];
$modelo = $_POST['model-prod'];
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

$queryProd = "INSERT INTO calcas (Nome, Tamanho, Custo, Preco, Quantidade, Modelo/*, Imagem*/) VALUES ('$nome', '$tamanho', '$custo', '$preco', '$quant', '$modelo')";
$prodResult = $conn->prepare($queryProd);
$prodResult->execute();

if ($prodResult) {
    print "<script>alert('Cadastrado com sucesso!')</script>";
    print "<script>location.href='/the_cargos/templates/produto-view.php'</script>";
} else {
    print "<script>alert('Falha ao cadastrar!')</script>";
    print "<script>location.href='/the_cargos/templates/produto-view.php'</script>";
}