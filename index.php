<?php

include('./static/php/conexao.php');
include('./static/php/login.php');

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

            <img src="/the_cargos/static/images/ascalcas.png" alt="as-calcas">

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