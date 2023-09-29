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
    <title>Pedidos</title>

    <link rel="stylesheet" href="../static/css/style-sidebar.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../static/css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../static/css/style-ped.css">


</head>

<body>
<?php include("sidebar1.php") ?>
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
        <?php include("sidebar2.php") ?>
</body>


<!-- Swiper JS -->

<script src="../static/js/swiper-bundle.min.js"></script>

<!-- JavaScript -->

<script src="../static/js/ped.js"></script>



</html>