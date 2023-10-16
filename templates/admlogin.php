<?php

include('../static/php/conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/the_cargos/static/css/style-admlogin.css">
    <title>Login</title>
</head>

<body>

    <header>
        <a href="/the_cargos/index.php">
            < Voltar</a>
                <img src="/the_cargos/static/images/ascalcas.png" alt="as-calcas">
                <div>
                    <h1>Bem-vindo!</h1>
                </div>
    </header>

    <main>
        <form action="../static/php/login.php" method="POST">
            <h2>Login no sistema</h2>
            <span>The</span> <span>Cargos</span>
            <input type="text" placeholder="Usuário" name="user">
            <input type="password" placeholder="Senha" name="senha">
            <input id="btn-login" type="submit" value="Entrar >">
        </form>
    </main>

</body>

</html>