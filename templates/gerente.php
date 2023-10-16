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
    <link rel="stylesheet" href="../static/css/style-gerente.css">
    <link rel="stylesheet" href="../static/css/style-estoque-antigo.css">
    <link rel="stylesheet" href="../static/css/style-estoque.css">
    <link rel="stylesheet" href="../static/css/style-sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Início</title>
</head>

<body>
    <?php
    include('sidebar1.php');
    ?>
    <div class="container">
        <div class="card">
            <h2>Produtos</h2>
            <p>Tela de listagem de calças e bermudas.</p>
            <a href="produto-view.php">Ir para a tela</a>
        </div>
        <div class="card">
            <h2>Funcionários</h2>
            <p>Tela de listagem de Funcionários.</p>
            <a href="funcionario-view.php">Ir para a tela</a>
        </div>
    </div>

    </div>
    <?php
    include('sidebar2.php');
    ?>
</body>

</html>