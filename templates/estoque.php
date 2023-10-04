<?php

include("../static/php/conexao.php");
include("../static/php/protect.php");

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="..\static\css\style-sidebar.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style-estoque.css">
    <title>Estoque</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-shopping-bag-alt bx-tada icon'></i>
            <div class="logo_name">TheCargos</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Painel inicial</span>
                </a>
                <span class="tooltip">Painel inicial</span>
            </li>
            <li>
                <a href="ped.php">
                    <i class='bx bx-package'></i>
                    <span class="links_name">Pedidos</span>
                </a>
                <span class="tooltip">Pedidos</span>
            </li>
            <li>
                <a href="estoque.php">
                    <i class='bx bxl-dropbox'></i>
                    <span class="links_name">Estoque</span>
                </a>
                <span class="tooltip">Estoque</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">ADM</div>
                    </div>
                </div>
                <a class="link-back" href="../static/php/logout.php"><i class='bx bx-log-out' id="log_out"></i></a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">Estoque</span>
            </div>
        </nav>
        <main>
            <div class="page-title">Seu Estoque</div>
            <div class="content">
                <section>
                    <table>
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Quantidade em Estoque</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product">
                                        <img src="../static/images/calca.jpg" alt class="img" />
                                        <div class="info">
                                            <div class="name">Lisa Pink</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="price">R$ 134,99</td>
                                <td>
                                    <div class="qty">
                                        <button onclick="decreaseQuantity(this)"><i class="bx bx-minus"></i></button>
                                        <span>2</span>
                                        <button onclick="increaseQuantity(this)"><i class="bx bx-plus"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="qty">
                                        <button class="edit-button" onclick="editProduct(this)">Editar Produto</button>
                                    </div>
                                </td>
                                <td>
                                    <button class="remove" data-product-index="0"><i class="bx bx-x"></i></button>
                                </td>
                            </tr>
                            <!-- Outras linhas de produtos -->
                        </tbody>
                    </table>
                </section>
                <aside>
                    <!-- Adicionar imagen ao "Adicionar arquivo" -->
                    <div class="box">
                        <header>Produto <textarea id="editProductName"></textarea></header>
                        <div class="info">
                            <div><span>Preço </span><textarea id="editProductPrice">R$ </textarea></div>
                            <div><span>Quantidade atual</span><textarea id="editProductQuantity"></textarea></div>
                        </div>
                        <footer>
                            <span id="addImageSpan">Adicionar Arquivo</span>
                            <label for="imageInput" class="qty">
                                <input type="file" id="imageInput" accept="image/*" style="display:none;">
                                <i class='bx bx-image-add'></i>
                            </label>
                            <span id="imageAttached" style="display:none;"><i class='bx bx-paperclip'></i></span>
                        </footer>
                        <img id="editProductImage" src="" alt="Produto" class="img" />
                    </div>
                    <button id="addProductButton">Adicionar Produto</button>
                    <button id="saveEditButton">Salvar Edição</button>
                </aside>
            </div>
        </main>
    </section>
</body>

</html>
