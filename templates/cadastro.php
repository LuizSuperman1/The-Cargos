<?php
include("../static/php/conexao.php");
include("../static/php/session.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style-catalogo.css">
    <link rel="stylesheet" href="../static/css/style-cadastro.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">

    <title>Catálogo</title>
</head>

<body>
    <header>
        <nav>
            <a class="logo" href="../templates/catalogo.php">TheCargos</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a class="link-navbar" href="../templates/catalogo.php">Início</a></li>
                <li><a class="link-navbar" href="../templates/produtos.php">Produtos</a></li>
                <li><a class="link-navbar" href="../templates/trocas.php">Trocas e Devoluções</a></li>
                <li><a class="link-navbar" href="../templates/guia-medidas.php">Guia de Medidas</a></li>
            </ul>
            <ul class="nav-list">
                <li><a class="link-navbar" href="../templates/carrinho.php">Carrinho</a></li>
                <li class="dropdown">
                    <a class="link-navbar" href="#">Minha Conta</a>
                    <div class="dropdown-menu">
                        <a href="../templates/cadastro.php">Criar uma conta</a>
                        <a href="../templates/login.php">Iniciar sessão</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main>

        <aside>
            <h2 class="welcome">Seja bem-vindo à</h2>
            <h2 class="welcome"><span>The Cargos!!</span></h2>
            <form action="" method="POST">

                <input type="text" placeholder="Nome completo" name="name">
                <input type="text" placeholder="Usuário" name="user">
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="Telefone" name="telefone">
                <input type="text" placeholder="Endereço" name="endereco">
                <input type="text" placeholder="CPF" name="cpf">
                <input type="text" placeholder="Senha" name="senha">
                <input id="btn-login" type="submit" value="Criar conta">

            </form>

        </aside>

        <article>

            <img src="..\static\images\ascalcas.png" alt="as-calcas">

        </article>


    </main>

    <footer>
        <div class="container-conectado">
            <h2>Mantenha-se conectado:</h2>
            <div class="div-contato">
                <a href="https://www.instagram.com/the_cargos/"><box-icon type="logo" color="white" size="md"
                        name="instagram-alt"></box-icon></a>
                <p>@the_cargos</p>
            </div>
            <div class="div-contato">
                <a href="https://www.tiktok.com/@the_cargos?_t=8d5eBefuMGz&_r=1"><box-icon type="logo" color="white"
                        size="md" name="tiktok"></box-icon></a>
                <p>@the_cargos</p>
            </div>
        </div>
        <div class="container-contato">
            <h2>Contato:</h2>
            <div class="div-contato">
                <a href="tel:11 94561-4648"><box-icon type='solid' color="white" size="md" name='phone'></box-icon></a>
                <p>11 94561-4648</p>
            </div>
            <div class="div-contato">
                <a href="thecargos.anywhere@gmail.com"><box-icon color="white" size="md" name='envelope'></box-icon></a>
                <p>thecargos.anywhere@gmail.com</p>
            </div>

        </div>
    </footer>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="../static/js/catalogo.js"></script>
</body>

</html>