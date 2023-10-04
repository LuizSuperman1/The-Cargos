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
    <title>Listagem de Produtos</title>
</head>

<body>
    <?php include("sidebar1.php") ?>

    <h1>Listagem de Produtos</h1>
    <div id="wrap">
        <form action="">
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
                    <td>
                        Imagem
                    </td>
                    <td>
                        Nome
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
                $pesquisa = $_GET['busca'];
                $sql_code = "SELECT * FROM calcas WHERE
                    Id_Prod LIKE '%$pesquisa%' OR
                    Nome LIKE '%$pesquisa%' OR
                    Tamanho LIKE '%$pesquisa%' OR
                    Custo LIKE '%$pesquisa%' OR
                    Preco LIKE '%$pesquisa%' OR
                    Quantidade LIKE '%$pesquisa%'";
            } else {
                $sql_code = "SELECT * FROM calcas";
            }
            $sql_query = sqlsrv_prepare($conn, $sql_code);

            while ($dados = $sql_query->fetch_object()) {
                ?>
                <tr>
                    <td>
                        <?php print $dados->Id_Prod; ?>
                    </td>
                    <td>
                        <img class="img-prod" src="../static/images/calca-tactel-cinza.jpeg" alt="">
                    </td>
                    <td>
                        <?php print $dados->Nome; ?>
                    </td>
                    <td>
                        <?php print $dados->Tamanho; ?>
                    </td>
                    <td>
                        <?php print $dados->Custo; ?>
                    </td>
                    <td>
                        <?php print $dados->Preco; ?>
                    </td>
                    <td>
                        <?php print $dados->Quantidade; ?>
                    </td>
                    <td>
                        <a class="link-prod" href="../templates/produto-edit.php?id=<?php echo $dados->Id_Prod ?>">Editar</a>
                        <a class="link-prod" href="../templates/produto-delete.php?id=<?php echo $dados->Id_Prod ?>">Excluir</a>
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