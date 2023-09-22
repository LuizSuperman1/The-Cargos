<?php

include("../static/php/conexao.php");
include("../static/php/protect.php");

?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>

    <link rel="stylesheet" href="../static/css/style-sidebar.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../static/css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../static/css/style-ped.css">


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
                        <!--<div class="job"></div>-->
                    </div>
                </div>
                <a class="link-back" href="admlogin.php"><i class='bx bx-log-out' id="log_out"></i></a>
            </li>
        </ul>
    </div>
    
    <section class="home-section">
        <div class="slide-container swiper">

            <h1>Pedidos</h1>

            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="../static/images/IMG_Maria.JPG" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Maria Eduarda</h2>
                            <p class="description">Pedido N°1 - Calça Cargo Lisa Preta P</p>

                            <button class="button">Detalhes do Pedido</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="../static/images/Img_davi.JPG" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Davi rocha</h2>
                            <p class="description">Pedido N°2 - Calça Reta Jeans Crystal G</p>

                            <button class="button">Detalhes do Pedido</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="../static/images/IMG_marianna.JPG" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Marianna Vaz</h2>
                            <p class="description">Pedido N°3 - Calça Tactel Creme P</p>

                            <button class="button">Detalhes do Pedido</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="../static/images/IMG_ramon.JPG" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Ramon Ponci</h2>
                            <p class="description">Pedido N°4 - Calça Cargo Jeans Clara</p>

                            <button class="button">Detalhes do Pedido</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="../static/images/IMG_isa.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Isabele Leite</h2>
                            <p class="description">Pedido N°5 - Calça Cargo Lisa Verde G </p>

                            <button class="button">Detalhes do Pedido</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="../static/images/IMG_LUIX.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Luiz Eduardo</h2>
                            <p class="description">Pedido N°6 - Calça Reta Jeans Azul Marinho GG</p>

                            <button class="button">Detalhes do Pedido</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="../static/images/ascalcas.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Gustavo Sousa</h2>
                            <p class="description">Pedido N°7 - Calça Cargo Tactel Preta G</p>

                            <button class="button">Detalhes do Pedido</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="../static/images/IMG_Jullia.jpeg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Júllia Nogueira</h2>
                            <p class="description">Pedido N°8 - Calça Cargo Lisa Creme P</p>

                            <button class="button">Detalhes do Pedido</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="../static/images/breno.jpeg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Breno</h2>
                            <p class="description">Pedido N°9 - Calça Cargo Jeans Black M</p>

                            <button class="button">Detalhes do Pedido</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
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


<!-- Swiper JS -->

<script src="../static/js/swiper-bundle.min.js"></script>

<!-- JavaScript -->

<script src="../static/js/ped.js"></script>



</html>