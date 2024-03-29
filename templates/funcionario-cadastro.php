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
    <h1 class="page-title">Cadastrar Novo Funcionário</h1>
    <div class="div-form">
        <form action="../static/php/func-cadastro.php" method="POST">

            <div class="row mb-3">
                <label for="inputNome" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputNome" name="email-func">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputCusto" class="col-sm-2 col-form-label">Senha:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputCusto" name="senha-func" minlength="6">
                </div>
            </div>
            <div id="botoes">
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
    <?php include("sidebar2.php") ?>
</body>

</html>