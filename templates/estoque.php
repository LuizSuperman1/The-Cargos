<?php

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
                        <div class="name">Ramon Ponci</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
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
    
    <script>
        function decreaseQuantity(button) {
            let quantitySpan = button.parentElement.querySelector("span");
            let currentQuantity = parseInt(quantitySpan.innerText);
            if (currentQuantity > 0) {
                quantitySpan.innerText = currentQuantity - 1;
            }
        }

        function increaseQuantity(button) {
            let quantitySpan = button.parentElement.querySelector("span");
            let currentQuantity = parseInt(quantitySpan.innerText);
            quantitySpan.innerText = currentQuantity + 1;
        }

    function editProduct(button) {
    // Encontre a linha (tr) que contém o botão clicado
    let row = button.closest('tr');

    // Encontre os elementos dentro da linha
    let productName = row.querySelector('.name').textContent;
    let productPrice = row.querySelector('.price').textContent;
    let productQuantity = row.querySelector('.qty span').textContent;

    // Preencha os campos de edição com as informações do produto
    document.getElementById("editProductName").value = productName;
    document.getElementById("editProductPrice").value = productPrice;
    document.getElementById("editProductQuantity").value = productQuantity;
}

        function removeProduct(productIndex) {
            const row = document.querySelector(`tbody tr:nth-child(${productIndex + 1})`);
            row.remove();
        }

        // Selecione todos os botões de exclusão
        const removeButtons = document.querySelectorAll('.remove');

        // Adicione um evento de clique a cada botão de exclusão
        removeButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                removeProduct(index);
            });
        });

        // Adicionar imagen ao "Adicionar arquivo"
        const addImageSpan = document.getElementById("addImageSpan");
    const imageInput = document.getElementById("imageInput");
    const imageAttached = document.getElementById("imageAttached");

    imageInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file && file.type.startsWith('image/')) {
            // Redimensionar a imagem (substitua pela lógica real de redimensionamento)
            const resizedImage = resizeImage(file);

            // Atualizar o ícone do botão e mostrar o ícone de clipe
            addImageSpan.style.display = "none";
            imageAttached.style.display = "inline";
        }
    });

    function resizeImage(imageFile) {
        // Lógica de redimensionamento da imagem
        // Substitua isso pela sua própria lógica de redimensionamento
        // Retorne a imagem redimensionada
        return imageFile;
    }

    // Definir a variável stock no escopo global
let stock = [];

// Função para adicionar eventos aos botões dos produtos
function addProductEvents(row) {
    const editButton = row.querySelector('.edit-button');
    const removeButton = row.querySelector('.remove');
    const decreaseButton = row.querySelector('.qty button:first-child');
    const increaseButton = row.querySelector('.qty button:last-child');

    // Evento de edição
    editButton.addEventListener('click', () => {
        editProduct(editButton);
    });

    // Evento de remoção
    removeButton.addEventListener('click', () => {
        removeProduct(row.rowIndex - 1); // Subtrai 1 porque as linhas são baseadas em 0
    });

    // Evento de diminuição da quantidade
    decreaseButton.addEventListener('click', () => {
        decreaseQuantity(decreaseButton);
    });

    // Evento de aumento da quantidade
    increaseButton.addEventListener('click', () => {
        increaseQuantity(increaseButton);
    });
}

    // Validação dos campos
    document.getElementById("addProductButton").addEventListener("click", function() {
    const productName = document.getElementById("editProductName").value;
    const productPrice = document.getElementById("editProductPrice").value;
    const productQuantity = document.getElementById("editProductQuantity").value;
    const productImage = imageInput.files[0];
    const productPriceInput = document.getElementById("editProductPrice");
    const rawPrice = productPriceInput.value; // Valor completo, incluindo "R$ "
    // Remover "R$ " do valor
    const numericPrice = rawPrice.replace("R$ ", "");
    
    productPriceInput.value = "R$ "; // Reset para "R$ "
;

    if (!productName || !productPrice || !productQuantity || !productImage) {
        alert("Por favor, preencha todos os campos e anexe uma imagem.");
    } else {
        // Implementar a adição do produto ao estoque aqui

        // Lógica para adicionar o produto ao estoque
        const newProduct = {
            name: productName,
            price: productPrice,
            quantity: productQuantity,
            image: URL.createObjectURL(productImage)
        };

        // Adicionar o novo produto ao estoque (armazenamento temporário)
        stock.push(newProduct);

        // Criar uma nova linha na tabela para exibir o produto adicionado
        const tbody = document.querySelector("tbody");
        const newRow = document.createElement("tr");

        const productCell = document.createElement("td");
        const productInfo = document.createElement("div");
        productInfo.className = "product";
        const productImg = document.createElement("img");
        productImg.src = newProduct.image;
        productImg.alt = "Produto";
        productImg.className = "img";
        const productNameDiv = document.createElement("div");
        productNameDiv.className = "info";
        const productNameSpan = document.createElement("div");
        productNameSpan.className = "name";
        productNameSpan.textContent = newProduct.name;
        productNameDiv.appendChild(productNameSpan);
        productInfo.appendChild(productImg);
        productInfo.appendChild(productNameDiv);
        productCell.appendChild(productInfo);

        const priceCell = document.createElement("td");
        priceCell.className = "price";
        priceCell.textContent = newProduct.price;

        const quantityCell = document.createElement("td");
        const quantityDiv = document.createElement("div");
        quantityDiv.className = "qty";
        const decreaseButton = document.createElement("button");
        decreaseButton.innerHTML = "<i class='bx bx-minus'></i>";
        const quantitySpan = document.createElement("span");
        quantitySpan.textContent = newProduct.quantity;
        const increaseButton = document.createElement("button");
        increaseButton.innerHTML = "<i class='bx bx-plus'></i>";
        quantityDiv.appendChild(decreaseButton);
        quantityDiv.appendChild(quantitySpan);
        quantityDiv.appendChild(increaseButton);
        quantityCell.appendChild(quantityDiv);

        const editCell = document.createElement("td");
        const editDiv = document.createElement("div");
        editDiv.className = "qty";
        const editButton = document.createElement("button");
        editButton.className = "edit-button";
        editButton.textContent = "Editar Produto";
        editDiv.appendChild(editButton);
        editCell.appendChild(editDiv);

        const removeCell = document.createElement("td");
        const removeButton = document.createElement("button");
        removeButton.className = "remove";
        removeButton.innerHTML = "<i class='bx bx-x'></i>";
        removeCell.appendChild(removeButton);

        newRow.appendChild(productCell);
        newRow.appendChild(priceCell);
        newRow.appendChild(quantityCell);
        newRow.appendChild(editCell);
        newRow.appendChild(removeCell);

        // No momento de adicionar um novo produto ao estoque
        tbody.appendChild(newRow);
        addProductEvents(newRow); // Adiciona os eventos aos botões dos produtos adicionados

        // Depois de adicionar o novo produto, você pode limpar os campos e redefinir a imagem
        document.getElementById("editProductName").value = "";
        productPriceInput.value = "R$ ";
        document.getElementById("editProductQuantity").value = "";
        imageInput.value = "";
        addImageSpan.style.display = "inline";
        imageAttached.style.display = "none";
    }
});

    // Captura os elementos de edição
const editProductName = document.getElementById("editProductName");
const editProductPrice = document.getElementById("editProductPrice");
const editProductQuantity = document.getElementById("editProductQuantity");

// Captura o botão "Salvar Edição"
const saveEditButton = document.getElementById("saveEditButton");

// Variável para armazenar o índice do produto sendo editado
let editingProductIndex = -1;

// Evento de clique no botão "Editar Produto"
function editProduct(button) {
    // Encontre a linha (tr) que contém o botão clicado
    const row = button.closest('tr');

    // Encontre o índice da linha (subtraindo 1 porque as linhas são baseadas em 0)
    editingProductIndex = row.rowIndex - 1;

    // Encontre os elementos dentro da linha
    const productName = row.querySelector('.name').textContent;
    const productPrice = row.querySelector('.price').textContent;
    const productQuantity = row.querySelector('.qty span').textContent;
    const productImg = row.querySelector('.img');
    const productImageURL = productImg.src; // Obtém a URL da imagem atual
    document.getElementById("editProductImage").src = productImageURL;

    // Preencha os campos de edição com as informações do produto
    editProductName.value = productName;
    editProductPrice.value = productPrice;
    editProductQuantity.value = productQuantity;
}

// Evento de clique no botão "Salvar Edição"
saveEditButton.addEventListener('click', () => {
    if (editingProductIndex !== -1) {
        // Captura a nova imagem selecionada
        const newImageFile = imageInput.files[0];
        // Atualiza as informações na tabela com os valores editados
        const productName = editProductName.value;
        const productPrice = editProductPrice.value;
        const productQuantity = editProductQuantity.value;

         // Atualiza a imagem na tabela apenas se uma nova imagem foi selecionada
         if (newImageFile) {
            const editedRow = document.querySelector(`tbody tr:nth-child(${editingProductIndex + 1})`);
            const editedImage = editedRow.querySelector('.img');
            editedImage.src = URL.createObjectURL(newImageFile);
        }

        // Atualiza as informações na linha correspondente
        const editedRow = document.querySelector(`tbody tr:nth-child(${editingProductIndex + 1})`);
        editedRow.querySelector('.name').textContent = productName;
        editedRow.querySelector('.price').textContent = productPrice;
        editedRow.querySelector('.qty span').textContent = productQuantity;

        // Limpa os campos de edição e imagem
        editProductName.value = '';
        editProductPrice.value = 'R$ ';
        editProductQuantity.value = '';
        imageInput.value = '';
        document.getElementById("editProductImage").src = '';
        addImageSpan.style.display = "inline";
        imageAttached.style.display = "none";

        // Reinicializa o índice de edição
        editingProductIndex = -1;
    }
});
    </script>
</body>
</html>
