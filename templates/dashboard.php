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
<?php include("sidebar1.php") ?>

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

        <?php include("sidebar2.php") ?>
</body>

</html>
