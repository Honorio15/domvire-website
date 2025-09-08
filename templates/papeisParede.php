<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Papeis de Parede </title>

    <!-- CSS -->
    <link rel="stylesheet" href="./templates/styles/produtos.css">
    <link rel="stylesheet" href="./templates/styles/navbar.css">
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
                        <a class="nav-link dropdown-toggle active" href="#" id="dropdown-products" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produtos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown-products">
                            <li><a class="dropdown-item" href="cortinas">Cortinas em Tecido </a></li>
                            <li><a class="dropdown-item" href="persianas">Persiana</a></li>
                            <li><a class="dropdown-item" href="papeisParede">Papel de Parede</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>

                </ul>
          </div>

        </div>
    </nav>

    <section class="d-flex flex-column w-100">

        <!-- Cabeçalho do Conteúdo - contem um texto falando sobre o produto -->
        <div id="content-header">
            <div class="row col-12">
                <div class="col-12 col-sm-7 col-md-6">
                    <img class="img-fluid col-12 h-100" src="templates/images/produto_papelParede.jpg" alt="">
                </div>

                <div class="col-12 col-sm-5 col-md-6">
                    <h3 class="mx-2 mb-4 mt-4 mt-md-0">Papeis de Parede </h3>
                    <p>
                        O papel de parede se destaca como um dos elementos mais práticos e versáteis na decoração de 
                        espaços internos. Sua eficácia reside na capacidade de conferir elegância, beleza e conforto 
                        ao ambiente, oferecendo a oportunidade de transformação sem a necessidade de grandes reformas. 

                        Com uma vasta gama de opções, os papéis de parede podem criar efeitos que variam de padrões 
                        vibrantes a sofisticados, seguindo as tendências que constantemente introduzem novas cores e 
                        texturas. 
                    </p>

                    <button class="btn btn-lg col-12 col-md-auto" id="btn-interest">Tenho interesse </button>
                </div>
                
            </div>
        </div>
        
        <!-- Mais Produtos - Mostra os outros produtos disponiveis -->
        <div id="more-products">
            <div class="container-fluid container-lg more-products-container">
                <div class="w-100">
                    <h3 class="text-center">Veja Também </h3>
                </div>

                <div class="row col-12 d-flex justify-content-center px-2 mt-4 mb-4">
                    <!-- Div - Papel de Parede -->
                    <div class="col-10 col-md-5 col-lg-5 mb-2 mx-1 mx-lg-2 py-2 d-flex align-items-end shadow" id="curtain">

                        <div class="w-100 col-md-6 d-flex justify-content-between products-content">
                            <span class="col-8 text-end text-light">Cortinas </span>
                            <button class="btn btn-lg btn-primary col-3 shadow rounded-0" id="btn-curtain"> 
                                <span class="material-symbols-outlined">arrow_forward </span> 
                            </button>
                        </div>
                    </div>

                    <!-- Div - Persiana -->
                    <div class="col-10 col-md-5 col-lg-5 mb-2 mx-1 mx-lg-2 py-2 d-flex align-items-end shadow" id="persienne">

                        <div class="w-100 d-flex justify-content-between products-content">
                            <span class="col-8 text-end text-light">Persianas </span>
                            <button class="btn btn-lg btn-primary col-3 shadow rounded-0" id="btn-persienne">
                                <span class="material-symbols-outlined">arrow_forward </span> 
                            </button>
                        </div>

                    </div>
                </div>

                <div class="line-3 mb-4"></div>    
            </div>
        </div>

        <!-- Recomendações - Mostra em qual comodo é recomendado o produto -->
        <div id="recomendations">
            <h3 class="text-center mb-3 mt-5">Recomendações </h3>

            <div class="list d-flex flex-row mb-5 px-3">

                <!-- Item 01 - Quarto -->
                <div class="items col-10 col-sm-6 col-md-5 col-lg-4 shadow mx-2 rounded" id="item-01">
                    <h3 class="item-title px-1 px-md-3 py-md-1 rounded-top text-center">Quarto </h3>

                    <div class="items-text hidden container mt-3 mb-5 rounded">
                        <p class="py-2 item-01">
                            Cortinas em tecido são uma excelente escolha para quartos devido à sua 
                            versatilidade e elegância. Com uma variedade de opções em termos de cor, 
                            padrão e textura, elas podem complementar facilmente o estilo do quarto. 
                        </p>
                        <p class="py-2 item-01">
                            Além disso, o forro oferece benefícios como isolamento térmico e acústico, 
                            enquanto a função de bloqueio de luz garante um ambiente escuro e tranquilo 
                            para uma boa noite de sono. 
                        </p>
                    </div>
                </div>

                <!-- Item 02 - Sala de Estar -->
                <div class="items col-10 col-sm-6 col-md-5 col-lg-4 shadow mx-2 rounded" id="item-02">
                    <h3 class="item-title px-1 px-md-3 py-md-1 rounded-top text-center">Sala de Estar </h3>

                    <div class="items-text hidden container mt-3 mb-5 rounded">
                        <p class="py-2 item-02">
                            Cortinas em tecido são uma excelente escolha para quartos devido à sua 
                            versatilidade e elegância. Com uma variedade de opções em termos de cor, 
                            padrão e textura, elas podem complementar facilmente o estilo do quarto. 
                        </p>
                        <p class="py-2 item-02">
                            Além disso, o forro oferece benefícios como isolamento térmico e acústico, 
                            enquanto a função de bloqueio de luz garante um ambiente escuro e tranquilo 
                            para uma boa noite de sono. 
                        </p>
                    </div>
                </div>

                <!-- Item 02 - Escritório -->
                <div class="items col-10 col-sm-6 col-md-5 col-lg-4 shadow mx-2 rounded" id="item-03">
                    <h3 class="item-title px-1 px-md-3 py-md-1 rounded-top text-center">Escritório </h3>

                    <div class="items-text hidden container mt-3 mb-5 rounded">
                        <p class="py-2 item-03">
                            Cortinas em tecido são uma excelente escolha para quartos devido à sua 
                            versatilidade e elegância. Com uma variedade de opções em termos de cor, 
                            padrão e textura, elas podem complementar facilmente o estilo do quarto. 
                        </p>
                        <p class="py-2 item-03">
                            Além disso, o forro oferece benefícios como isolamento térmico e acústico, 
                            enquanto a função de bloqueio de luz garante um ambiente escuro e tranquilo 
                            para uma boa noite de sono. 
                        </p>
                    </div>
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
                                <span class="mb-2">contato@ateliedesign.com.br </span>
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
    <script src="templates/scripts/produtos.js"></script>
</body>
</html>