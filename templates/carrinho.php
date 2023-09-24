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
  <link rel="stylesheet" href="../static/css/style-carrinho.css">

  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
  <title>Carrinho</title>
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
    <div class="page-title">Seu Carrinho</div>
    <div class="content">
      <section>
        <table>
          <thead>
            <tr>
              <th>Produto</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th>Total</th>
              <th>-</th>
            </tr>
          </thead>
          <tbody>

            <!-- Conteúdo da primeira linha do carrinho -->
            <tr data-product-id="1">
              <td>
                <div class="product">
                  <img
                    src="https://d3ugyf2ht6aenh.cloudfront.net/stores/002/564/263/products/a68223d7-ecfb-4ceb-9290-c48070cd169e1-bc9e3fa832a2710a4016824278180966-640-0.jpeg"
                    height="120" width="100" />
                  <div class="info">
                    <div class="name">Calça Tactel Cinza</div>
                    <div class="category">Categoria - Tactel</div>
                  </div>
                </div>
              </td>
              <td class="price">R$ 134.99</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>1</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td class="total-price">R$ 134.99</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>

            <!-- Conteúdo da segunda linha do carrinho -->
            <tr data-product-id="2">
              <td>
                <div class="product">
                  <img
                    src="https://d3ugyf2ht6aenh.cloudfront.net/stores/002/564/263/products/calca-cargo-tactel-nova-capa1-2135ccd55e6a565b2716744687824722-640-0.jpg"
                    height="120" width="100" />
                  <div class="info">
                    <div class="name">Calça Tactel Preta com Ziper</div>
                    <div class="category">Categoria - Tactel</div>
                  </div>
                </div>
              </td>
              <td class="price">R$ 139.99</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>1</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td class="total-price">R$ 139.99</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>

            <!-- Conteúdo da terceira linha do carrinho -->
            <tr data-product-id="3">
              <td>
                <div class="product">
                  <img
                    src="https://d3ugyf2ht6aenh.cloudfront.net/stores/002/564/263/products/cargo-lisa-preta-capa1-3be270f0d9ea126a2216731961164861-640-0.jpg"
                    height="120" width="100" />
                  <div class="info">
                    <div class="name">Calça Lisa Preta</div>
                    <div class="category">Categoria - Lisa</div>
                  </div>
                </div>
              </td>
              <td class="price">R$ 129.99</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>1</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td class="total-price">R$ 129.99</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>

            <!-- código de adicionar/remover/excluir a quantidade de produtos junto com a soma -->

            <script>
              document.addEventListener("DOMContentLoaded", function () {
                const cartRows = document.querySelectorAll("tr[data-product-id]");
                const subTotalElement = document.querySelector(".total-items"); // Sub-total
                const grandTotalElement = document.querySelector(".grand-total"); // Total
                const discountElement = document.querySelector(".discount");
                const applyCouponButton = document.getElementById("apply-coupon");
                const couponContainer = document.querySelector(".coupon-container");
                const addCouponButton = document.getElementById("add-coupon");
                const couponPopup = document.querySelector(".coupon-popup");
                const errorMessage = document.querySelector(".error-message"); // Selecionar a mensagem de erro
                const successMessage = document.querySelector(".success-message"); // Selecionar a mensagem de sucesso

                let couponApplied = false;
                let originalSubTotal = 0;

                // Atualiza o subtotal, total e desconto
                function updateCartTotal() {
                  let subTotal = 0;

                  cartRows.forEach(row => {
                    const qtyCell = row.querySelector(".qty span");
                    const priceCell = row.querySelector(".price");

                    const qty = parseInt(qtyCell.textContent);
                    const price = parseFloat(priceCell.textContent.replace("R$ ", ""));
                    const total = price * qty;

                    if (!row.classList.contains("removed")) {
                      subTotal += total;
                    }
                  });

                  subTotalElement.textContent = `R$ ${subTotal.toFixed(2)}`; // Atualizar sub-total

                  if (couponApplied) {
                    const discountAmount = originalSubTotal * 0.10;
                    const newSubTotal = subTotal - discountAmount;
                    const newGrandTotal = newSubTotal;

                    grandTotalElement.textContent = `R$ ${newGrandTotal.toFixed(2)}`;
                    discountElement.textContent = `-R$ ${discountAmount.toFixed(2)}`;
                  } else {
                    grandTotalElement.textContent = `R$ ${subTotal.toFixed(2)}`;
                    discountElement.textContent = `-R$ 0.00`;
                  }
                }

                // Aplica o cupom de desconto
                function applyCoupon() {
                  const couponCodeInput = document.getElementById("coupon-code");
                  const couponCode = couponCodeInput.value.trim();

                  // Verifica se o cupom é válido (por exemplo, verificar em um array de códigos válidos)
                  const validCouponCodes = ["DESCONTO10", "CUPOM20"]; // Exemplo de códigos válidos

                  if (validCouponCodes.includes(couponCode)) {
                    if (!couponApplied) {
                      originalSubTotal = parseFloat(subTotalElement.textContent.replace("R$ ", ""));
                      const discountAmount = originalSubTotal * 0.10;
                      const newSubTotal = originalSubTotal - discountAmount;
                      const newGrandTotal = newSubTotal;

                      grandTotalElement.textContent = `R$ ${newGrandTotal.toFixed(2)}`;
                      discountElement.textContent = `-R$ ${discountAmount.toFixed(2)}`;
                      couponApplied = true;
                      successMessage.style.display = "block"; // Exibir a mensagem de sucesso
                      errorMessage.style.display = "none"; // Esconder a mensagem de erro
                    }
                  } else {
                    errorMessage.style.display = "block"; // Exibir a mensagem de erro
                    successMessage.style.display = "none"; // Esconder a mensagem de sucesso
                  }
                }

                // Limpa o cupom de desconto
                function clearCoupon() {
                  couponApplied = false;
                  updateCartTotal();
                  successMessage.style.display = "none"; // Esconder a mensagem de sucesso
                  errorMessage.style.display = "none"; // Esconder a mensagem de erro
                }

                // Atualiza o total do carrinho ao carregar a página
                updateCartTotal();

                // Event listener para adicionar/remover/excluir quantidade de produtos
                cartRows.forEach(row => {
                  const addButton = row.querySelector(".qty .bx-plus");
                  const removeButton = row.querySelector(".qty .bx-minus");
                  const deleteButton = row.querySelector(".remove");

                  addButton.addEventListener("click", () => addQuantity(row));
                  removeButton.addEventListener("click", () => removeQuantity(row));
                  deleteButton.addEventListener("click", () => {
                    removeProduct(row);
                    clearCoupon(); // Limpa o cupom ao remover um produto
                  });
                });

                // Event listener para aplicar o cupom de desconto
                applyCouponButton.addEventListener("click", applyCoupon);

                // Event listener para mostrar/ocultar o container de cupom de desconto
                addCouponButton.addEventListener("click", function () {
                  couponContainer.classList.toggle("active");
                });

                // Função para adicionar quantidade de produtos
                function addQuantity(row) {
                  const qtyCell = row.querySelector(".qty span");
                  const qty = parseInt(qtyCell.textContent);
                  qtyCell.textContent = qty + 1;
                  updateCartTotal();
                  clearCoupon(); // Limpa o cupom ao modificar a quantidade
                }

                // Função para remover quantidade de produtos
                function removeQuantity(row) {
                  const qtyCell = row.querySelector(".qty span");
                  const qty = parseInt(qtyCell.textContent);
                  if (qty > 1) {
                    qtyCell.textContent = qty - 1;
                    updateCartTotal();
                    clearCoupon(); // Limpa o cupom ao modificar a quantidade
                  }
                }

                // Função para remover produto do carrinho
                function removeProduct(row) {
                  row.classList.add("removed");
                  row.style.display = "none";
                  updateCartTotal();
                }
              });

              document.addEventListener("DOMContentLoaded", function () {
                // Adicionar um evento de clique ao botão de "Finalizar Compra" pelo ID
                const finalizarCompraButton = document.getElementById("finalizar-compra-button");

                if (finalizarCompraButton) {
                  finalizarCompraButton.addEventListener("click", function () {
                    //Redirecionar para a tela de pagamento 
                    window.location.href = "pagamento.html";
                  });
                }
              });
            </script>



          </tbody>
        </table>
      </section>
      <aside>
        <div class="box">
          <header>Resumo da compra</header>
          <div class="info">
            <div><span>Sub-total</span><span class="total-items">R$ 0.00</span></div>
            <div><span>Frete</span><span>Gratuito</span></div>
            <div><span>Desconto</span><span class="discount">R$ 00.00</span></div>
            <div class="coupon-container">
              <button id="add-coupon" class="coupon-button">
                Adicionar cupom de desconto
                <i class="bx bx-right-arrow-alt"></i>
              </button>
              <div class="coupon-popup">
                <input type="text" id="coupon-code" placeholder="Insira o cupom">
                <button id="apply-coupon">Aplicar</button>
                <p class="error-message">Cupom inválido. Verifique o código e tente novamente.</p>
                <p class="success-message">Cupom aplicado com sucesso!</p>
              </div>
            </div>
          </div>
          <footer>
            <span>Total</span>
            <span class="grand-total">R$ 0.00</span>
          </footer>
        </div>
        <button id="finalizar-compra-button">Finalizar Compra</button>
      </aside>
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