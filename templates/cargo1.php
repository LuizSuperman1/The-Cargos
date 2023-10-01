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
    <link rel="stylesheet" href="../static/css/style-cargo1.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <title>Calça Tactel Cinza</title>
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
                        <?php
                        if (!isset($_SESSION['Id_Cliente'])) {
                            ?>
                            <a href="../templates/cadastro.php">Criar uma conta</a>
                            <a href="../templates/login.php">Iniciar sessão</a>
                            <?php
                        } else {
                            ?>
                            <a href="../templates/userperfil.php">Perfil</a>
                            <a href="../static/php/logoutuser.php">Finalizar sessão</a>
                            <?php
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="product-details">
            <div>
                <img class="product-img" src="../static/images/calca-tactel-cinza.jpeg" alt="Calça tactel cinza">
            </div>
            <div class="product-desc">
                <form action="../templates/carrinho.php" method="POST">
                    <h1 class="product-title" value="calca_tactel_cinza">Calça tactel cinza</h1><br>
                    <p>Se liga nas qualidades dessa raridade... <br>

                        Além de exclusiva, essa cargo tem um dos melhores caimentos que temos na loja e de <br> fato um
                        Tactel confortável e que ainda te deixa muitooo mais bonito... <br>

                        A mais nova Tactel da loja, tem corte largo e se você <br> gosta de uma calça balão, vem nessa
                        que é a pura❤️‍🔥</p><br>
                    <p class="product-price" value="140">R$134,99</p>
                    <label class="label-tamanho" for="tamanho">Tamanho:</label>
                    <select class="select-tamanho" name="tamanho" id="tam">
                        <optgroup>
                            <option value="tam-p">P</option>
                            <option value="tam-m">M</option>
                            <option value="tam-g">G</option>
                            <option value="tam-gg">GG</option>
                        </optgroup>
                    </select><br><br><br>
                    <button type="submit" class="btn-buy">Adicionar ao carrinho</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="container-conectado">
            <h2>Mantenha-se conectado:</h2>
            <div class="div-contato">
                <a href="https://www.instagram.com/the_cargos/">
                    <box-icon type="logo" color="white" size="md" name="instagram-alt"></box-icon>
                </a>
                <p>@the_cargos</p>
            </div>
            <div class="div-contato">
                <a href="https://www.tiktok.com/@the_cargos?_t=8d5eBefuMGz&_r=1">
                    <box-icon type="logo" color="white" size="md" name="tiktok"></box-icon>
                </a>
                <p>@the_cargos</p>
            </div>
        </div>
        <div class="container-contato">
            <h2>Contato:</h2>
            <div class="div-contato">
                <a href="tel:11 94561-4648">
                    <box-icon type='solid' color="white" size="md" name='phone'></box-icon>
                </a>
                <p>11 94561-4648</p>
            </div>
            <div class="div-contato">
                <a href="thecargos.anywhere@gmail.com">
                    <box-icon color="white" size="md" name='envelope'></box-icon>
                </a>
                <p>thecargos.anywhere@gmail.com</p>
            </div>

        </div>
    </footer>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="../static/js/catalogo.js"></script>
</body>

</html>