<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donvirê - Cortinas, Persianas e Papéis de Parede</title>
    <meta name="description" content="Donvirê - Especialista em cortinas, persianas e papéis de parede. Produtos de alta qualidade para transformar sua casa.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-color: #8B7355;
            --secondary-color: #F8F5F0;
            --accent-color: #C0A080;
            --dark-color: #3A3A3A;
            --light-color: #FFFFFF;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
            overflow-x: hidden;
            padding-top: 76px; /* Compensar a navbar fixa */
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }
        
        .navbar {
            background-color: var(--light-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            padding: 15px 0;
        }
        
        .navbar.scrolled {
            padding: 8px 0;
            background-color: rgba(255, 255, 255, 0.95);
        }
        
        .nav-link {
            color: var(--dark-color) !important;
            font-weight: 500;
            margin: 0 10px;
            position: relative;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        
        .dropdown-item:hover {
            background-color: var(--secondary-color);
        }
        
        #hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('templates/images/cortinas_tecido_home1.png');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            color: white;
        }
        
        .hero-content {
            max-width: 700px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .section-title {
            position: relative;
            margin-bottom: 40px;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
            bottom: -15px;
            left: 0;
        }
        
        .section-title.center:after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .product-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
            background: white;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .product-img {
            height: 250px;
            overflow: hidden;
        }
        
        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover .product-img img {
            transform: scale(1.1);
        }
        
        .about-section {
            background-color: var(--secondary-color);
            padding: 80px 0;
        }
        
        .gallery-item {
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        #contact {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 80px 0;
        }
        
        .form-control {
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(139, 115, 85, 0.25);
        }
        
        footer {
            background-color: #2a2a2a;
            color: #fff;
            padding: 60px 0 30px;
        }
        
        .footer-links h5 {
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--primary-color);
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: white;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }
        
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 25px;
            right: 25px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulse 2s infinite;
            transition: all 0.3s ease;
        }
        
        .whatsapp-float:hover {
            background-color: #128C7E;
            transform: scale(1.1);
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }
        
        /* Placeholder para imagens faltantes */
        .img-placeholder {
            background: linear-gradient(45deg, #f0f0f0, #e0e0e0);
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-weight: 500;
        }
        
        /* Responsividade */
        @media (max-width: 768px) {
            #hero {
                height: 60vh;
                text-align: center;
            }
            
            .hero-content {
                padding: 0 20px;
            }
            
            .product-card {
                margin-bottom: 30px;
            }
            
            body {
                padding-top: 66px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- Usando um placeholder para a logo já que não temos o caminho correto -->
                <div style="height: 50px; width: 150px; background: #8B7355; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold;">DONVIRÊ</div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produtos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="cortinas">Cortinas em Tecido</a></li>
                            <li><a class="dropdown-item" href="persianas">Persianas</a></li>
                            <li><a class="dropdown-item" href="papeisParede">Papel de Parede</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="display-4 fw-bold">Transforme sua casa com elegância</h1>
                <p class="lead my-4">Inspire-se na suavidade das nossas cortinas, persianas e papéis de parede para criar um lar perfeito</p>
                <a href="#products" class="btn btn-primary btn-lg">Conheça nossos produtos</a>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title center">Nossos Produtos</h2>
                <p class="lead">Descubra nossa linha exclusiva de produtos para sua casa</p>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="templates/images/cortinas_tecido_home1.png" alt="Cortinas em Tecido">
                        </div>
                        <div class="p-4">
                            <h3>Cortinas em Tecido</h3>
                            <p>As cortinas da Donvirê, feitas sob medida, oferecem beleza, funcionalidade e sofisticação para seu ambiente.</p>
                            <a href="cortinas" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="templates/images/persianas_home1.png" alt="Persianas">
                        </div>
                        <div class="p-4">
                            <h3>Persianas</h3>
                            <p>Solução inteligente e sofisticada para controlar a luminosidade e a privacidade, sem comprometer a estética.</p>
                            <a href="persianas" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="templates/images/papeis_parede_home1.png" alt="Papéis de Parede">
                        </div>
                        <div class="p-4">
                            <h3>Papéis de Parede</h3>
                            <p>Seguem as tendências, assegurando qualidade e excelente acabamento para transformar seus ambientes.</p>
                            <a href="papeisParede" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Sobre a Donvirê</h2>
                    <p class="lead">Dos projetos simples aos mais complexos, estamos aqui para atender suas necessidades</p>
                    <p>Com anos de experiência no mercado, a Donvirê se consolidou como referência em cortinas, persianas e papéis de parede. Nossa missão é transformar ambientes através de produtos de alta qualidade e designs exclusivos.</p>
                    <p>Valorizamos o atendimento personalizado, entendendo as necessidades de cada cliente para oferecer a melhor solução para seu espaço.</p>
                    <a href="#" class="btn btn-primary mt-3">Nossa história</a>
                </div>
                <div class="col-lg-6">
                    <!-- Placeholder para imagem sobre -->
                    <div class="img-placeholder" style="height: 400px; border-radius: 10px;">
                        Imagem Sobre a Empresa
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title center">Galeria de Projetos</h2>
                <p class="lead">Confira alguns de nossos trabalhos realizados</p>
            </div>
            
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <img src="templates/images/image01.png" alt="Projeto 1">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <img src="templates/images/image02.png" alt="Projeto 2">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <img src="templates/images/image03.png" alt="Projeto 3">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <img src="templates/images/image04.png" alt="Projeto 4">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <!-- Placeholder para imagem adicional -->
                        <div class="img-placeholder">
                            Imagem 5
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <!-- Placeholder para imagem adicional -->
                        <div class="img-placeholder">
                            Imagem 6
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">Ver mais projetos</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title center">Entre em Contato</h2>
                <p class="lead">Estamos à disposição para tirar suas dúvidas e orçar seu projeto</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Seu nome" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Seu e-mail" required>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Assunto">
                        <textarea class="form-control" rows="5" placeholder="Sua mensagem" required></textarea>
                        <button type="submit" class="btn btn-primary w-100">Enviar mensagem</button>
                    </form>
                </div>
                
                <div class="col-lg-6">
                    <div class="p-4">
                        <h4 class="mb-4">Informações de Contato</h4>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-telephone-fill me-3"></i>
                            <div>
                                <h5 class="mb-0">Telefone</h5>
                                <p class="mb-0">(31) 3388-5757</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-envelope-fill me-3"></i>
                            <div>
                                <h5 class="mb-0">E-mail</h5>
                                <p class="mb-0">contato@donvire.com.br</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-geo-alt-fill me-3"></i>
                            <div>
                                <h5 class="mb-0">Endereço</h5>
                                <p class="mb-0">Av. Principal, 123 - Belo Horizonte/MG</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-3">Siga-nos nas redes sociais</h5>
                            <div class="social-icons">
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-pinterest"></i></a>
                                <a href="#"><i class="bi bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <!-- Logo no footer -->
                    <div style="height: 50px; width: 150px; background: #8B7355; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; margin-bottom: 20px;">DONVIRÊ</div>
                    <p>Transformando ambientes com elegância e sofisticação através de cortinas, persianas e papéis de parede de alta qualidade.</p>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 footer-links">
                    <h5>Produtos</h5>
                    <ul>
                        <li><a href="cortinas">Cortinas</a></li>
                        <li><a href="persianas">Persianas</a></li>
                        <li><a href="papeisParede">Papéis de Parede</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 footer-links">
                    <h5>Empresa</h5>
                    <ul>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#gallery">Galeria</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 mb-4">
                    <h5>Inscreva-se em nossa newsletter</h5>
                    <form class="mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Seu e-mail">
                            <button class="btn btn-primary" type="button">Inscrever</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center pt-4 border-top border-secondary">
                <p>&copy; 2023 Donvirê - Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float -->
    <a href="https://wa.me/553133885757" class="whatsapp-float" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Simple form validation
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Obrigado por entrar em contato! Retornaremos em breve.');
            this.reset();
        });
    </script>
</body>
</html>