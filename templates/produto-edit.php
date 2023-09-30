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
    <title>Editar</title>
</head>

<body>
    <?php include("sidebar1.php") ?>
            <h1>Cadastrar Novo Produto</h1>
            <div id="wrap">
                <form action="">
                    <div>
                        <h2 class="digite-text">Digite o Id do produto que queira editar</h2>
                        <input type="number" placeholder="Id" name="search-id" value="<?php if (isset($_GET['search-id'])) echo $_GET['search-id'] ?>">
                    </div>
                </form><br>
                    <div>
                        <?php
                        if (isset($_GET['search-id'])) {
                            $pesquisa = $conn->real_escape_string($_GET['search-id']);
                            $sql_code_search = "SELECT * FROM calcas WHERE Id_Prod LIKE '%$pesquisa%'";

                            $sql_query_search = $conn->query($sql_code_search) or die("Erro ao pesquisar produto! " . $conn->error);
                            $dados = $sql_query_search->fetch_assoc();
                        }
                        ?>
                    <form action="../static/php/prod-edit.php" method="POST">
                        <input type="text" style="display:none;" name="prod-id" value="<?php $pesquisa ?>">
                        <input type="text" placeholder="Nome" name="nome-prod" value="<?php if (isset($_GET['search-id'])) echo $dados['Nome'] ?>">
                        <input type="number" placeholder="Quantidade" name="quant-prod" value="<?php if (isset($_GET['search-id'])) echo $dados['Quantidade'] ?>">
                        <input type="number" placeholder="Custo" name="custo-prod" value="<?php if (isset($_GET['search-id'])) echo $dados['Custo'] ?>">
                        <input type="number" placeholder="Preço" name="preco-prod" value="<?php if (isset($_GET['search-id'])) echo $dados['Preco'] ?>">
                        <input type="text" placeholder="Tamanho" name="tam-prod" value="<?php if (isset($_GET['search-id'])) echo $dados['Tamanho'] ?>">
                        <!--<input type="file" accept="image/*" name="image-prod" value="<?php /* if (isset($_GET['search-id'])) echo $dados['Imagem'] */ ?>">-->
                    </div>
                    <div id="botoes">
                        <button type="submit">Editar</button>
                    </div>
                    </form>
            </div>
            <?php include("sidebar2.php") ?>
</body>

</html>