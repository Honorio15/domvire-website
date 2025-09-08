<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contate-nos </title>

    <!-- CSS -->
    <link rel="stylesheet" href="./templates/styles/navbar.css">
    <link rel="stylesheet" href="./templates/styles/contato.css">
    <link rel="stylesheet" href="./templates/styles/rodape.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="libraries/bootstrap-5.2.3-dist/css/bootstrap.min.css">

    <!-- Goggle Icons & Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container-fluid">
            
            <a class="navbar-brand" id="navbar-logo" href="home">
                <!-- <img src="./images/Nobres_V1_NEG_SBG.png" alt="Logo" width="150" class="d-inline-block align-text-top"> -->
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-75 mb-4 d-flex justify-content-lg-evenly">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-products" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produtos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown-products">
                            <li><a class="dropdown-item" href="cortinas">Cortinas em Tecido </a></li>
                            <li><a class="dropdown-item" href="persianas">Persiana</a></li>
                            <li><a class="dropdown-item" href="papeisParede">Papel de Parede</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contato">Contato</a>
                    </li>

                </ul>
          </div>

        </div>
    </nav>

    <header>
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-center col-12 col-md-6">
                <h2>Contate-nos </h2>
                <p class="mt-3">Deixe-nos uma mensagem e entraremos em contato em breve </p>
            </div>
        </div>
    </header>

    <section>
        <div id="line-section" class="line-2 col-10 col-sm-8"></div>

        <h3 class="text-center mb-5" id="content-title">Onde Atendemos </h3>

        <div id="content">
            <div class="row w-100">

                <!-- Image -->
                <div class="col-12 col-md-6 col-lg-7" id="image">
                    <img class="img-fluid" src="templates/images/onde-atendemos02.jpg" alt="">
                </div>

                <!-- Louders -->
                <div class="col-12 col-md-6 col-lg-5">
                    <h3 class="container mx-3 text-center text-md-start mb-4 mt-3 mt-md-0 col-12">Louders </h3>

                    <ul class="container address list-unstyled">
                        <li class="mb-3 d-flex items">
                            <span class="material-symbols-outlined mx-1">location_on </span>
                            <a target="_blank" href="https://www.google.com/maps/place/Ateli%C3%AA+Design/@-19.92907,-43.9483307,17z/data=!3m1!4b1!4m5!3m4!1s0xa6967d5d4ff501:0xd6534ea2ba70a324!8m2!3d-19.92907!4d-43.946142?shorturl=1">Rua Gonçalves Dias, 2299 - Lourdes - Belo Horizonte / MG </a>
                        </li>
                        <li class="mb-3 d-flex items">
                            <span class="material-symbols-outlined mx-1">call </span>
                            <a href="tel:3133885759">(31) 3388-5759</a>
                        </li>
                        <li class="mb-3 d-flex items">
                            <span class="material-symbols-outlined mx-1">alternate_email </span>
                            <a href="mailto:contato@domvire.com.br">contato@domvire.com.br </a>
                        </li>
                        <li class="mb-3 d-flex items">
                            <span class="material-symbols-outlined mx-1">share </span>
                            <a target="_blank" href="https://www.domvire.com.br/">www.domvire.com.br</a> 
                        </li>
                    </ul>

                    <div class="line-2 mt-5 mb-4 col-11 col-md-10" id="line-hours"></div>

                    <row class="container row col-12">
                        <div class="col-6 text-center text-md-start">
                            <span class="fw-bolder title-day">Segunda a Sexta </span>
                            <p>9h as 18h</p>
                        </div>

                        <div class="col-6 text-center text-md-start">
                            <span class="fw-bolder title-day">Sábado </span>
                            <p>9h as 13h</p>
                        </div>
                    </row>
                </div>


            </div>
        </div>

        <!-- Rodapé -->
        <div id="footer">
            <div class="mx-3 py-4 row d-flex justify-content-center">
                <div class="col-6 col-md-3 col-lg-2 mb-1">
                    <img src="./templates/images/Logo_Completo_off_white-removebg-preview.png" alt="NOBRES_LOGO" class="img-fluid">
                </div>

                <div class="row col-12 col-md-12 col-lg-10 d-flex justify-content-center justify-content-lg-start">
                    
                    <div class="col-5 col-md-2 col-lg-2">
                        <ul class="footer-list mt-3">
                            <li class="list-title">Inicio </li>
                            <li>Home </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <ul class="footer-list mt-3">
                            <li class="list-title">Produtos </li>
                            <li>Cortinas em Tecido </li>
                            <li>Papeis de Parede </li>
                            <li>Persianas </li>
                        </ul>
                    </div>
                    <div class="col-5 col-md-3 col-lg-3">
                        <ul class="footer-list mt-3">
                            <li class="list-title">Compania </li>
                            <li>Sobre Nós </li>
                            <li>Galeria de Fotos </li>
                            <li>Mood Ateliê </li>
                            <li>Enlace </li>
                            <li>Contato </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-2 col-lg-1">
                        <ul class="footer-list mt-3">
                            <li class="list-title">Social </li>
                            <li>Instagram </li>
                            <li>Facebook </li>
                            <li>Youtube </li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-10">
                        <div class="line-2 mt-2 mb-4" id="footer-line"></div>    

                        <div class="col-12 d-flex justify-content-evenly">
                            <div class="footer-tellphone">
                                <span class="mb-2">31 3388-575 </span>
                            </div>
                            <div class="footer-email">
                                <span class="mb-2">contato@domvire.com.br </span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="libraries/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="libraries/jQuery/jquery-3.5.1.min.js"></script>
    <!-- JS -->
    <!-- <script src="templates/scripts/produtos.js"></script> -->
</body>
</html>