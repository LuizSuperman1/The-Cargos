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
    <title>Listagem de Funcionários</title>
</head>

<body>

    <?php include("sidebar1.php") ?>

    <h1>Listagem de Funcionários</h1>
    <div class="div-form">
        <form action="">
            <div class="row mb-3">
                <label for="cat-label" class="col-sm-2 col-form-label">Pesquisar por:</label>
                <div class="col-sm-10">
                    <select name="cat-choice" class="mb-3 form-select">
                        <option value="email">Email</option>
                        <option value="acesso">Acesso</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNome" class="col-sm-2">Termo de pesquisa: <br> (1 = ADM, 2 = Funcionário)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNome" name="busca" value="<?php if (isset($_GET['busca']))
                        echo $_GET['busca'] ?>">
                    </div>
                </div>
                <div id="botoes">
                    <button type="submit">Pesquisar</button>
                    <a class="link-prod" href="funcionario-cadastro.php">Cadastrar</a>
                </div>
            </form>
        </div>

        <div id="saida">
            <table width="100%" height="5%">
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        Senha
                    </td>
                    <td>
                        Acesso
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
                                    $cat_choose = "Id_Adm = '" . $pesquisa . "'";
                                    break;
                                case 'email':
                                    $cat_choose = "Email LIKE '%" . $pesquisa . "%'";
                                    break;
                                case 'acesso':
                                    $cat_choose = "Acesso = '" . $pesquisa . "'";
                                    break;
                                default:
                                    $cat_choose = "Id_Adm = '" . $pesquisa . "'";
                            }
                            $sql_code = "SELECT * FROM admin WHERE $cat_choose $ordem_choose";
                        } else {
                            $sql_code = "SELECT * FROM admin";
                        }
                    } else {
                        $sql_code = "SELECT * FROM admin";
                    }
                    $sql_query = $conn->prepare($sql_code);
                    $sql_query->execute();

                    while ($dados = $sql_query->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                <tr>
                    <td>
                        <?php print $dados['Email']; ?>
                    </td>
                    <td>
                        <?php print $dados['Senha'] ?>
                    </td>
                    <td>
                        <?php if ($dados['Acesso'] == 1) {
                            echo "ADM";
                        } else if ($dados['Acesso'] == 2) {
                            echo "Funcionário";
                        }
                        ; ?>
                    </td>
                    <td>
                        <a class="link-prod"
                            href="../templates/funcionario-edit.php?id=<?php echo $dados['Id_Adm'] ?>">Editar</a>
                        <a class="link-prod"
                            onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='/the_cargos/static/php/func-delete.php?id=<?php echo $dados['Id_Adm'] ?>';}else{false;}">Excluir</a>
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