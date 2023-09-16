<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style-catalogo.css">

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


        <div class="container-title">
            <h1>As mais procuradas!</h1>
        </div>
        <div class="container-body">
            <div class="card card-1">
                <div class="card-header">
                    <a href="../templates/cargo1.php"><img class="card-img" src="../static/images/calca-tactel-cinza.jpeg"></a>
                </div>
                <div class="card-body">
                    <h3 class="card-nome">Calça tactel cinza</h3>
                    <h2 class="card-preco">R$134,99</h2>
                </div>
            </div>
            <div class="card card-2">
                <div class="card-header">
                    <a href="#"><img class="card-img" src="../static/images/calca-tactel-preta-ziper.jpg"></a>
                </div>
                <div class="card-body">
                    <h3 class="card-nome">Calça tactel preta com zíper</h3>
                    <h2 class="card-preco">R$139,99</h2>
                </div>
            </div>
            <div class="card card-3">
                <div class="card-header">
                    <a href="#"><img class="card-img" src="../static/images/calca-lisa-preta.jpg"></a>
                </div>
                <div class="card-body">
                    <h3 class="card-nome">Calça lisa preta</h3>
                    <h2 class="card-preco">R$129,99</h2>
                </div>
            </div>
            <div class="card card-4">
                <div class="card-header">
                    <a href="#"><img class="card-img" src="../static/images/bermuda-lisa-preta.jpg"></a>
                </div>
                <div class="card-body">
                    <h3 class="card-nome">Bermuda lisa preta</h3>
                    <h2 class="card-preco">R$89,99</h2>
                </div>
            </div>
        </div>
        <div class="container-footer">
            <h1><a href="produtos.php">Veja mais!!</a></h1>
        </div>



        <div class="container-title">
            <h1>A Pronta Entrega!</h1>
        </div>
        <div class="container-body">
            <div class="card card-1">
                <div class="card-header">
                    <a href="#"><img class="card-img" src="../static/images/calca-lisa-roxa.jpeg"></a>
                </div>
                <div class="card-body">
                    <h3 class="card-nome">Calça lisa roxa</h3>
                    <h2 class="card-preco">R$129,99</h2>
                </div>
            </div>
            <div class="card card-2">
                <div class="card-header">
                    <a href="#"><img class="card-img" src="../static/images/calca-colete-azul-clara.jpg"></a>
                </div>
                <div class="card-body">
                    <h3 class="card-nome">Calça coletê azul clara</h3>
                    <h2 class="card-preco">R$159,99</h2>
                </div>
            </div>
            <div class="card card-3">
                <div class="card-header">
                    <a href="#"><img class="card-img" src="../static/images/calca-lisa-branca.jpg"></a>
                </div>
                <div class="card-body">
                    <h3 class="card-nome">Calça lisa branca</h3>
                    <h2 class="card-preco">R$129,99</h2>
                </div>
            </div>
            <div class="card card-4">
                <div class="card-header">
                    <a href="#"><img class="card-img" src="../static/images/calca-reta-jeans-crystal.jpeg"></a>
                </div>
                <div class="card-body">
                    <h3 class="card-nome">Calça reta jeans crystal</h3>
                    <h2 class="card-preco">R$129,99</h2>
                </div>
            </div>
        </div>
        <div class="container-footer">
            <h1><a href="produtos.php">Veja mais!!</a></h1>
        </div>


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
                <a href="https://www.tiktok.com/@the_cargos?_t=8d5eBefuMGz&_r=1"><box-icon type="logo" color="white" size="md"
                        name="tiktok"></box-icon></a>
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