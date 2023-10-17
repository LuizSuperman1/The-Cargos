<?php

include("../static/php/conexao.php");
include("../static/php/protect.php");

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style-sidebar.css">
    <link rel="stylesheet" href="../static/css/style-estoque.css">
    <link rel="stylesheet" href="../static/css/style-estoque-antigo.css">
    <link rel="stylesheet" href="../static/css/style-produto-edit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Editar</title>
</head>

<body>
    <?php include("sidebar1.php") ?>
    <h1>Editar Produto</h1>
    <div class="div-form">
        <?php
        if (isset($_GET['search-id'])) {
            $pesquisa = $_GET['search-id'];
            $sql_code_search = "SELECT * FROM calcas WHERE Id_Prod LIKE '%$pesquisa%'";

            $sql_query_search = $conn->prepare($sql_code_search);
            $sql_query_search->execute();
            $dados = $sql_query_search->fetch(PDO::FETCH_ASSOC);
        } else {
            $pesquisa = $_REQUEST['id'];
            $sql_code_search = "SELECT * FROM calcas WHERE Id_Prod LIKE '%$pesquisa%'";

            $sql_query_search = $conn->prepare($sql_code_search);
            $sql_query_search->execute();
            $dados = $sql_query_search->fetch(PDO::FETCH_ASSOC);
        }
        ?>
        <form action="../static/php/prod-edit.php" method="POST">
            <input type="hidden" name="prod-id" value="<?php echo $pesquisa ?>">
            <div class="row mb-3">
                <label for="inputNome" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNome" name="nome-prod" value="<?php
                    echo $dados['Nome'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNome" class="col-sm-2 col-form-label">Modelo:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputModelo" name="model-prod" value="<?php
                    echo $dados['Modelo'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputTamanho" class="col-sm-2 col-form-label">Tamanho:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTamanho" name="tam-prod" value="<?php
                    echo $dados['Tamanho'] ?>" maxlength="3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputCusto" class="col-sm-2 col-form-label">Custo de compra:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCusto" name="custo-prod" value="<?php
                    echo $dados['Custo'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPreco" class="col-sm-2 col-form-label">Preço de venda:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPreco" name="preco-prod" value="<?php
                    echo $dados['Preco'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputQuant" class="col-sm-2 col-form-label">Em estoque:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputQuant" name="quant-prod" value="<?php
                    echo $dados['Quantidade'] ?>">
                </div>
            </div>
            <div id="botoes">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
    <?php include("sidebar2.php") ?>
</body>

</html>