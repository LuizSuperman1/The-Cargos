<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style-catalogo.css">
    <link rel="stylesheet" href="../static/css/style-produtos.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <title>Produtos</title>
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
        <div class="container-main">
            <div class="container-header">
                <box-icon name='search' size="" color="gray"></box-icon>
                <input class="search-bar" type="text" placeholder="Pesquisar">
            </div>
            <div class="filters">
                <div class="calcas">
                    <p>Calças</p>
                    <ul>
                        <li class="link-list"><a class="lists-link" href="">Lisas</a></li>
                        <li class="link-list"><a class="lists-link" href="">Tacteis</a></li>
                        <li class="link-list"><a class="lists-link" href="">Jeans</a></li>
                    </ul>
                </div>
                <div class="bermudas">
                    <p>Bermudas</p>
                    <ul>
                        <li><a class="lists-link" href="">Lisas</a></li>
                        <li><a class="lists-link" href="">Tacteis</a></li>
                        <li><a class="lists-link" href="">Jeans</a></li>
                    </ul>
                </div>
            </div>
            <div class="container-body">
                <div class="card">
                    <div class="card-header">
                        <a href="../templates/cargo1.php"><img class="card-img" src="../static/images/calca-tactel-cinza.jpeg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Calça tactel cinza</h3>
                        <h2 class="card-preco">R$134,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img"
                                src="../static/images/calca-tactel-preta-ziper.jpg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Calça tactel preta com zíper</h3>
                        <h2 class="card-preco">R$139,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img" src="../static/images/calca-lisa-preta.jpg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Calça lisa preta</h3>
                        <h2 class="card-preco">R$129,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img" src="../static/images/bermuda-lisa-preta.jpg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Bermuda lisa preta</h3>
                        <h2 class="card-preco">R$89,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img" src="../static/images/calca-lisa-roxa.jpeg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Calça lisa roxa</h3>
                        <h2 class="card-preco">R$129,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img" src="../static/images/calca-colete-azul-clara.jpg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Calça coletê azul clara</h3>
                        <h2 class="card-preco">R$159,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img" src="../static/images/calca-lisa-branca.jpg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Calça lisa branca</h3>
                        <h2 class="card-preco">R$129,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img" src="../static/images/calca-reta-jeans-crystal.jpeg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Calça reta jeans crystal</h3>
                        <h2 class="card-preco">R$129,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img" src="../static/images/bermuda-tactel-vermelha-bege.jpeg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Bermuda tactel vermelha/bege</h3>
                        <h2 class="card-preco">R$109,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img" src="../static/images/calca-parachute-verde.jpg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Calça parachute verde</h3>
                        <h2 class="card-preco">R$134,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img" src="../static/images/calca-camuflada-escura.jpg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Calça camuflada escura</h3>
                        <h2 class="card-preco">R$129,99</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#"><img class="card-img" src="../static/images/calca-white-contrast.jpeg"></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-nome">Calça white contrast</h3>
                        <h2 class="card-preco">R$129,99</h2>
                    </div>
                </div>
            </div>
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