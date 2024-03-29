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
    <link rel="stylesheet" href="../static/css/style-estoque-antigo.css">
    <link rel="stylesheet" href="../static/css/style-estoque.css">
    <link rel="stylesheet" href="../static/css/style-sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Listagem de Produtos</title>
</head>

<body>
    <?php include("sidebar1.php") ?>

    <h1 class="page-title">Listagem de Produtos</h1>
    <div class="div-form">
        <form action="">
            <div class="row mb-3">
                <label for="cat-label" class="col-sm-2 col-form-label">Pesquisar por:</label>
                <div class="col-sm-10">
                    <select name="cat-choice" class="mb-3 form-select">
                        <option value="nome"<?php if (isset($_GET['cat-choice'])) {if ($_GET['cat-choice'] === 'nome') { echo "selected";}}?>>Nome</option>
                        <option value="modelo"<?php if (isset($_GET['cat-choice'])) {if ($_GET['cat-choice'] === 'modelo') { echo "selected";}}?>>Modelo</option>
                        <option value="tamanho"<?php if (isset($_GET['cat-choice'])) {if ($_GET['cat-choice'] === 'tamanho') { echo "selected";}}?>>Tamanho</option>
                        <option value="custo"<?php if (isset($_GET['cat-choice'])) {if ($_GET['cat-choice'] === 'custo') { echo "selected";}}?>>Custo</option>
                        <option value="preco"<?php if (isset($_GET['cat-choice'])) {if ($_GET['cat-choice'] === 'preco') { echo "selected";}}?>>Preço</option>
                        <option value="quantidade"<?php if (isset($_GET['cat-choice'])) {if ($_GET['cat-choice'] === 'quantidade') { echo "selected";}}?>>Quantidade</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ordem-label" class="col-sm-2 col-form-label">Ordenar por:</label>
                <div class="col-sm-10">
                    <select name="ordem-choice" class="mb-3 form-select">
                        <option value="alfabeto"<?php if (isset($_GET['ordem-choice'])) {if ($_GET['ordem-choice'] === 'alfabeto') { echo "selected";}} ?>>Ordem Alfabética</option>
                        <option value="menor-custo"<?php if (isset($_GET['ordem-choice'])) {if ($_GET['ordem-choice'] === 'menor-custo') { echo "selected";}} ?>>Menor Custo</option>
                        <option value="maior-custo"<?php if (isset($_GET['ordem-choice'])) {if ($_GET['ordem-choice'] === 'maior-custo') { echo "selected";}} ?>>Maior Custo</option>
                        <option value="menor-preco"<?php if (isset($_GET['ordem-choice'])) {if ($_GET['ordem-choice'] === 'menor-preco') { echo "selected";}} ?>>Menor Preço</option>
                        <option value="maior-preco"<?php if (isset($_GET['ordem-choice'])) {if ($_GET['ordem-choice'] === 'maior-preco') { echo "selected";}} ?>>Maior Preço</option>
                        <option value="menor-quantidade"<?php if (isset($_GET['ordem-choice'])) {if ($_GET['ordem-choice'] === 'menor-quantidade') { echo "selected";}} ?>>Menor Quantidade</option>
                        <option value="maior-quantidade"<?php if (isset($_GET['ordem-choice'])) {if ($_GET['ordem-choice'] === 'maior-quantidade') { echo "selected";}} ?>>Maior Quantidade</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNome" class="col-sm-2 col-form-label">Termo de pesquisa:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNome" name="busca" value="<?php if (isset($_GET['busca']))
                        echo $_GET['busca'] ?>">
                    </div>
                </div>
                <div id="botoes">
                    <button type="submit">Pesquisar</button>
                    <a class="link-prod" href="produto-cadastro.php">Cadastrar</a>
                </div>
            </form>
        </div>

        <div id="saida">
            <table width="100%" height="5%">
                <tr>
                    <td>
                        Nome
                    </td>
                    <td>
                        Modelo
                    </td>
                    <td>
                        Tam.
                    </td>
                    <td>
                        Custo
                    </td>
                    <td>
                        Preço
                    </td>
                    <td>
                        Quant.
                    </td>
                    <td>
                        Ações
                    </td>
                </tr>
                <?php

                    if (isset($_GET['busca'])) {
                        if (strlen($_GET['busca']) > 0) {
                            $pesquisa = $_GET['busca'];
                            switch ($_GET['cat-choice']) {
                                case 'nome':
                                    $cat_choose = "Nome LIKE '%" . $pesquisa . "%'";
                                    break;
                                case 'tamanho':
                                    $cat_choose = "Tamanho LIKE '%" . $pesquisa . "%'";
                                    break;
                                case 'custo':
                                    $cat_choose = "Custo LIKE '%" . $pesquisa . "%'";
                                    break;
                                case 'preco':
                                    $cat_choose = "Preco LIKE '%" . $pesquisa . "%'";
                                    break;
                                case 'quantidade':
                                    $cat_choose = "Quantidade LIKE '%" . $pesquisa . "%'";
                                    break;
                                default:
                                    $cat_choose = "Nome LIKE '%" . $pesquisa . "%'";
                            }
                            switch ($_GET['ordem-choice']) {
                                case 'alfabeto':
                                    $ordem_choose = "ORDER BY Nome ASC";
                                    break;
                                case 'menor-custo':
                                    $ordem_choose = "ORDER BY Custo ASC";
                                    break;
                                case 'maior-custo':
                                    $ordem_choose = "ORDER BY Custo DESC";
                                    break;
                                case 'menor-preco':
                                    $ordem_choose = "ORDER BY Preco ASC";
                                    break;
                                case 'maior-preco':
                                    $ordem_choose = "ORDER BY Preco DESC";
                                    break;
                                case 'menor-quantidade':
                                    $ordem_choose = "ORDER BY Quantidade ASC";
                                    break;
                                case 'maior-quantidade':
                                    $ordem_choose = "ORDER BY Quantidade DESC";
                                    break;
                                default:
                                    $ordem_choose = "ORDER BY Nome ASC";
                            }
                            $sql_code = "SELECT * FROM calcas WHERE $cat_choose $ordem_choose";
                        } else {
                            $sql_code = "SELECT * FROM calcas";
                        }
                    } else {
                        $sql_code = "SELECT * FROM calcas";
                    }
                    $sql_query = $conn->prepare($sql_code);
                    $sql_query->execute();

                    while ($dados = $sql_query->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                <tr>
                    <td>
                        <?php print $dados['Nome']; ?>
                    </td>
                    <td>
                        <?php print $dados['Modelo']; ?>
                    </td>
                    <td>
                        <?php print $dados['Tamanho']; ?>
                    </td>
                    <td>
                        <?php print "R$ " . $dados['Custo']; ?>
                    </td>
                    <td>
                        <?php print "R$ " . $dados['Preco']; ?>
                    </td>
                    <td>
                        <?php print $dados['Quantidade']; ?>
                    </td>
                    <td>
                        <a class="link-prod"
                            href="../templates/produto-edit.php?id=<?php echo $dados['Id_Prod'] ?>">Editar</a>
                        <a class="link-prod"
                            onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='/the_cargos/static/php/prod-delete.php?id=<?php echo $dados['Id_Prod'] ?>';}else{false;}">Excluir</a>
                    </td>
                </tr>
                <?php
                    }
                    ?>
        </table>
    </div>
    <?php include("sidebar2.php") ?>
</body>

</html>