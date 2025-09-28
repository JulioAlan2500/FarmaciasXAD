<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Farmacias XAD por sama</title>
    <link rel="shortcut icon" href="view/img/logos/FarmaciasXAD - FavIcon.jpg" type="image/x-icon" />

    <!-- CSS -->
    <link rel="stylesheet" href="view/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="view/css/cssIndex.css?v=1.1">
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
                                <a class="nav-link" href="view/pages/productos.php">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view/pages/servicios.php">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view/pages/contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Carrusel de imágenes -->
        <div class="carousel-container">
            <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
                </div>

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

        <!-- Slider de Productos Destacados -->
        <section class="featured-products">
            <div class="container">
                <h2 class="section-title">Productos Destacados</h2>

                <div class="products-slider">
                    <!-- Productos (mantener igual) -->
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
                            <p>Amplia variedad de medicamentos con y sin receta para todo tipo de necesidades médicas.</p>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-spa"></i>
                            </div>
                            <h3>Perfumería</h3>
                            <p>Fragancias exclusivas y productos de belleza para el cuidado personal y realzar tu estilo.</p>
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
                            <p>Medicamentos originales de laboratorios reconocidos con garantía de calidad y efectividad.</p>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <footer>
            <div class="cols">
                <div>
                    <strong>Farmacias XAD</strong>
                    <p>Rebótica, perfumería, genéricos, patente, naturista y homeopatía.</p>
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

    <!-- JavaScript -->
    <script src="view/vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="view/js/scriptIndex.js?v=1.0"></script>
    <script src="view/js/slider.js?v=1.0"></script>
</body>

</html>