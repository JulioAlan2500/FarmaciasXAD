<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Farmacias XAD</title>
    <link rel="shortcut icon" href="view/img/logos/FarmaciasXAD - FavIcon.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="view/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/cssIndex.css">
    <script src="view/vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Estilos para el carrusel */
        .carousel-container {
            width: 100%;
            margin-bottom: 2rem;
        }
        
        .carousel-item {
            height: 70vh;
            min-height: 400px;
            background: no-repeat center center;
            background-size: cover;
            position: relative;
        }
        
        .carousel-caption {
            bottom: initial;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }
        
        .carousel-content {
            background-color: rgba(25, 65, 115, 0.85);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
            max-width: 800px;
            margin: 0 auto;
        }
        
        .carousel-content h1 {
            font-weight: 700;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 1.5rem !important;
        }
        
        .carousel-content p {
            font-size: 1.5rem;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
            margin-bottom: 0;
        }
        
        .carousel-indicators button {
            width: 12px !important;
            height: 12px !important;
            border-radius: 50%;
            margin: 0 8px !important;
        }
        
        .carousel-control-prev, .carousel-control-next {
            width: 5% !important;
        }
        
        /* Estilos para el slider de productos destacados */
        .featured-products {
            padding: 3rem 0;
            background-color: #f8f9fa;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 2.5rem;
            color: #194173;
            font-weight: 700;
        }
        
        .products-slider {
            position: relative;
            padding: 0 50px;
        }
        
        .product-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
            margin: 0 10px;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .product-img {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f5f9;
            padding: 20px;
        }
        
        .product-img img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }
        
        .product-info {
            padding: 1.5rem;
        }
        
        .product-title {
            font-weight: 600;
            color: #194173;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        .product-desc {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .product-price {
            font-weight: 700;
            color: #2c8c99;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }
        
        .product-btn {
            background-color: #2c8c99;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-weight: 500;
            transition: background-color 0.3s;
            width: 100%;
        }
        
        .product-btn:hover {
            background-color: #23747f;
        }
        
        .slick-prev, .slick-next {
            width: 40px;
            height: 40px;
            background: #2c8c99;
            border-radius: 50%;
            z-index: 1;
        }
        
        .slick-prev {
            left: -45px;
        }
        
        .slick-next {
            right: -45px;
        }
        
        .slick-prev:before, .slick-next:before {
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: white;
            font-size: 18px;
        }
        
        .slick-prev:before {
            content: "\f104";
        }
        
        .slick-next:before {
            content: "\f105";
        }
        
        .slick-dots li button:before {
            font-size: 10px;
            color: #2c8c99;
        }
        
        .slick-dots li.slick-active button:before {
            color: #2c8c99;
        }
        
        @media (max-width: 768px) {
            .carousel-item {
                height: 50vh;
            }
            
            .carousel-caption {
                padding-top: 30px;
            }
            
            .carousel-content {
                padding: 1.5rem;
            }
            
            .carousel-content h1 {
                font-size: 2.2rem;
            }
            
            .carousel-content p {
                font-size: 1.2rem;
            }
            
            .products-slider {
                padding: 0 30px;
            }
            
            .slick-prev {
                left: -20px;
            }
            
            .slick-next {
                right: -20px;
            }
        }
    </style>
</head>

<body>
    <div class="contentPrincipal">
        <header class="header">
            <nav class="navbar navbar-expand-md custom-navbar bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="view/img/logos/FarmaciasXAD.jpg" width="200" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="" data-bs-target="#categoriesOffcanvas"
                                    href="view/pages/productos.php">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" target="" href="view/pages/servicios.php">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view/pages/contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Carrusel de imágenes (nuevo) -->
        <div class="carousel-container">
            <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <!-- Indicadores -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
                </div>
                
                <!-- Imágenes del carrusel desde archivos locales -->
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('view/img/Farmacias_XAD_Carrusel_1.jpg')">
                        <div class="carousel-caption">
                            <div class="carousel-content">
                                <h1 class="display-4 mb-4">Bienvenido a Farmacias XAD</h1>
                                <p class="lead">Tu salud es nuestra prioridad. Encuentra los mejores productos farmacéuticos y servicios de calidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('view/img/Farmacias_XAD_Carrusel_2.jpg')">
                        <div class="carousel-caption">
                            <div class="carousel-content">
                                <h1 class="display-4 mb-4">Cuidamos de ti y tu familia</h1>
                                <p class="lead">Profesionales de la salud comprometidos con tu bienestar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('view/img/Farmacias_XAD_Carrusel_3.jpg')">
                        <div class="carousel-caption">
                            <div class="carousel-content">
                                <h1 class="display-4 mb-4">Servicio de excelencia</h1>
                                <p class="lead">Ofrecemos asesoramiento personalizado para tus necesidades de salud.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>

        <!-- Slider de Productos Destacados (nuevo) -->
        <section class="featured-products">
            <div class="container">
                <h2 class="section-title">Productos Destacados</h2>
                
                <div class="products-slider">
                    <!-- Producto 1 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="view/img/products/vitaminas.jpg" alt="Vitaminas y Suplementos">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Vitaminas y Suplementos</h3>
                            <p class="product-desc">Completa tu nutrición con nuestras vitaminas de alta calidad.</p>
                            <div class="product-price">$299.00</div>
                            <button class="product-btn">Agregar al carrito</button>
                        </div>
                    </div>
                    
                    <!-- Producto 2 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="view/img/products/analgesicos.jpg" alt="Analgésicos">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Analgésicos</h3>
                            <p class="product-desc">Alivio rápido para dolores de cabeza, musculares y más.</p>
                            <div class="product-price">$149.50</div>
                            <button class="product-btn">Agregar al carrito</button>
                        </div>
                    </div>
                    
                    <!-- Producto 3 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="view/img/products/cuidado_personal.jpg" alt="Cuidado Personal">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Cuidado Personal</h3>
                            <p class="product-desc">Productos para el cuidado de la piel, cabello y más.</p>
                            <div class="product-price">$219.00</div>
                            <button class="product-btn">Agregar al carrito</button>
                        </div>
                    </div>
                    
                    <!-- Producto 4 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="view/img/products/medicamento_natural.jpg" alt="Medicamentos Naturales">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Medicamentos Naturales</h3>
                            <p class="product-desc">Soluciones naturales para tu salud y bienestar.</p>
                            <div class="product-price">$259.00</div>
                            <button class="product-btn">Agregar al carrito</button>
                        </div>
                    </div>
                    
                    <!-- Producto 5 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="view/img/products/cuidado_respiratorio.jpg" alt="Cuidado Respiratorio">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Cuidado Respiratorio</h3>
                            <p class="product-desc">Alivio para problemas respiratorios y alergias.</p>
                            <div class="product-price">$189.00</div>
                            <button class="product-btn">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <main class="main">
            <div class="main-container">
                <section class="section">
                    <div class="services-grid">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <h3>Rebótica</h3>
                            <p>Amplia variedad de medicamentos con y sin receta para todo tipo de necesidades médicas.
                            </p>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-spa"></i>
                            </div>
                            <h3>Perfumería</h3>
                            <p>Fragancias exclusivas y productos de belleza para el cuidado personal y realzar tu
                                estilo.</p>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-capsules"></i>
                            </div>
                            <h3>Genéricos</h3>
                            <p>Medicamentos de calidad con el mismo principio activo pero a precios más accesibles.</p>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-flask"></i>
                            </div>
                            <h3>Patente</h3>
                            <p>Medicamentos originales de laboratorios reconocidos con garantía de calidad y
                                efectividad.</p>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <footer>
            <div class="cols">
                <div>
                    <strong>Farmacias XAD</strong>
                    <p>
                        Rebótica, perfumería, genéricos, patente, naturista y homeopatía.
                    </p>
                </div>
                <div>
                    <p><strong>Tel:</strong> (000) 123 4567</p>
                    <p><strong>Email:</strong> contacto@farmaciasxad.com</p>
                </div>
                <div>
                    <p>© 2025 Farmacias XAD</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- jQuery y Slick Slider -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    
    <script>
        $(document).ready(function(){
            $('.products-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>