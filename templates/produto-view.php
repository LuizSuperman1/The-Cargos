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

    <h1>Listagem de Produtos</h1>
    <div id="wrap">
        <form action="">
            <label for="cat-label" class="cat-label">Pesquisar por:</label>
            <select name="cat-choice">
                <option value="id">Id</option>
                <option value="nome">Nome</option>
                <option value="nome">Modelo</option>
                <option value="tamanho">Tamanho</option>
                <option value="custo">Custo</option>
                <option value="preco">Preço</option>
                <option value="quantidade">Quantidade</option>
            </select>
            <label for="ordem-label" class="ordem-label">Ordenar:</label>
            <select name="ordem-choice">
                <option value="alfabeto">Alfabeticamente</option>
                <option value="id">Id</option>
                <option value="menor-custo">Menor custo</option>
                <option value="maior-custo">Maior custo</option>
                <option value="menor-preco">Menor preço</option>
                <option value="maior-preco">Maior preço</option>
                <option value="menor-quant">Menor quantidade</option>
                <option value="maior-quant">Maior quantidade</option>
            </select>
            <input type="text" value="<?php if (isset($_GET['busca']))
                echo $_GET['busca'] ?>" name="busca" placeholder="Digite os termos de pesquisa">
                <button class="btn-search" type="submit">Pesquisar</button>
            </form>
            <div id="botoes">
                <a class="link-prod" href="produto-cadastro.php">Cadastrar</a>
            </div>
        </div>

        <div id="saida">
            <table width="100%" height="5%">
                <tr>
                    <td>
                        Código
                    </td>
                    <!--<td>
                        Imagem
                    </td>-->
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
                        case 'id':
                            $cat_choose = "Id_Prod = '" . $pesquisa . "'";
                            break;
                        case 'nome':
                            $cat_choose = "Nome LIKE '%" . $pesquisa . "%'";
                            break;
                        case 'modelo':
                            $cat_choose = "Modelo LIKE '%" . $pesquisa . "%'";
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
                            $cat_choose = "Quantidade = '%" . $pesquisa . "%'";
                            break;
                        default:
                            $cat_choose = "Id_Prod = '" . $pesquisa . "'";
                    }
                    switch ($_GET['ordem-choice']) {
                        case 'alfabeto':
                            $ordem_choose = "ORDER BY Nome ASC";
                            break;
                        case 'id':
                            $ordem_choose = "ORDER BY Id_Prod ASC";
                            break;
                        case 'menor-custo':
                            $ordem_choose = "ORDER BY Custo DESC ";
                            break;
                        case 'maior-custo':
                            $ordem_choose = "ORDER BY Custo ASC";
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
                        <?php print $dados['Id_Prod']; ?>
                    </td>
                    <!--<td>
                        <img class="img-prod" src="../static/images/calca-tactel-cinza.jpeg" alt="">
                    </td>-->
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