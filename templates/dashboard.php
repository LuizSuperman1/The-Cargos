<?php

include("../static/php/conexao.php");
include("../static/php/protect.php");

?>
<!DOCTYPE html>

<html lang="pt-br" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../static/css/dashboard.css">
  <link rel="stylesheet" href="../static/css/style-sidebar.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
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
      <li>
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

        <span class="dashboard">Dashboard</span>

      </div>

    </nav>

    <div class="wrapper">

        <div name="delivery" class="box">

          <i class='bx bxs-truck'></i>

          <a href="#">Formas de Entrega</a>

        </div>

        <div name="payment-types" class="box">

          <i class='bx bx-credit-card'></i>

          <a href="#">Formas de Pagamento</a>

        </div>

        <div name="estatistics" class="box">

          <i class='bx bx-line-chart'></i>

          <a href="#">Desempenho</a>

        </div>

    </div>

  </section>


  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the iocns class
      }
    }
  </script>
</body>

</html>
