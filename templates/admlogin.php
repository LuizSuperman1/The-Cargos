<?php

include("../static/php/conexao.php");

if(isset($_POST['user']) || isset($_POST['senha'])) {

    if (strlen($_POST['user']) == 0) {
        echo "Preencha o usuário";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha a senha";
    } else {
        $user = $mysqli->real_escape_string($_POST['user']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM admin WHERE user = '$user' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na conexão do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade==1) {
            $adm = $sql_query->fetch_assoc();
            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['Id_Adm'] = $adm['Id_Adm'];
            $_SESSION['user'] = $adm['user'];

            header("Location: dashboard.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos!";
        }
    }

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\static\css\style-admlogin.css">
    <title>Login</title>
</head>

<body>

    <header>

        <div id="title">
            <h1>The Cargos</h1>
        </div>

        <div>
            <h1>Bem-vindo!</h1>
        </div>

    </header>


    <main>

        <aside>
            <h2>Login no sistema</h2>
            <h2><span>The Cargos</span></h2>
            <form action="" method="POST">

                <input type="text" placeholder="Usuário" name="user">
                <input type="password" placeholder="Senha" name="senha">
                <input id="btn-login" type="submit" value="Entrar >">
                
            </form>

        </aside>

        <article>

            <img src="..\static\images\ascalcas.png" alt="as-calcas">

        </article>

    </main>

    <footer>

        <div id="footer_coopyright">

            &#169
            2023 all rights reserved

        </div>

    </footer>

</body>

</html>