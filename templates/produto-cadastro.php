<?php

include("../static/php/conexao.php");
include("../static/php/protect.php");

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="..\static\css\style-sidebar.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\The-Cargos\static\css\style-sidebar.css">
    <link rel="stylesheet" href="../static/css/style-estoque.css">
    <link rel="stylesheet" href="../static/css/style-estoque-antigo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Cadastrar</title>
</head>

<body>
    <?php include("sidebar1.php") ?>
            <h1>Cadastrar Novo Produto</h1>
            <div id="wrap">
                <form action="../static/php/prod-cadastro.php" method="POST">
                    <input type="text" placeholder="Nome:" name="nome-prod">
                    <input type="number" placeholder="Quantidade" name="quant-prod">
                    <input type="number" placeholder="Custo" name="custo-prod">
                    <input type="number" placeholder="Preço" name="preco-prod">
                    <input type="text" placeholder="Tamanho" name="tam-prod">
                    <!--<input type="file" accept="image/*" name="image-prod">-->
                    <div id="botoes">
                        <button type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>
            <?php include("sidebar2.php") ?>
</body>

</html>