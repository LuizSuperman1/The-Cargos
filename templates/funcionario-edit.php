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
    <h1>Editar Funcionário</h1>
    <div class="div-form">
        <form action="">
            <div class="row mb-3">
                <label for="inputId" class="col-sm-2 col-form-label">Id: </label>
                <div class="col-sm-10">
                    <input type="number" readonly class="form-control" id="inputId"
                        value="<?php echo $_REQUEST['id'] ?>">
                </div>
            </div>
        </form><br>
        <?php
        if (isset($_GET['search-id'])) {
            $pesquisa = $_GET['search-id'];
            $sql_code_search = "SELECT * FROM admin WHERE Id_Adm LIKE '%$pesquisa%'";

            $sql_query_search = $conn->prepare($sql_code_search);
            $sql_query_search->execute();
            $dados = $sql_query_search->fetch(PDO::FETCH_ASSOC);
        } else {
            $pesquisa = $_REQUEST['id'];
            $sql_code_search = "SELECT * FROM admin WHERE Id_Adm LIKE '%$pesquisa%'";

            $sql_query_search = $conn->prepare($sql_code_search);
            $sql_query_search->execute();
            $dados = $sql_query_search->fetch(PDO::FETCH_ASSOC);
        }
        ?>
        <form action="../static/php/func-edit.php" method="POST">
            <input type="hidden" name="func-id" value="<?php echo $pesquisa ?>">
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" name="email-func" value="<?php
                    echo $dados['Email'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSenha" class="col-sm-2 col-form-label">Senha:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSenha" name="senha-func" value="<?php
                    echo $dados['Senha'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputTamanho" class="col-sm-2 col-form-label">Acesso (1= Admin; <br> 2= Funcionário):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTamanho" name="acesso-func" value="<?php
                    echo $dados['Acesso'] ?>" maxlength="1">
            </div>
            <div id="botoes">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
    <?php include("sidebar2.php") ?>
</body>

</html>