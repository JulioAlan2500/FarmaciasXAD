<?php
include_once '../../controller/CtrlProducto.php';
include_once '../../model/MdlProducto.php';
include_once '../../model/Conexion.php';
include_once '../../model/popo/Producto.php';

$productos = new CtrlProducto();

$pagina = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
$productoBuscar = isset($_GET['busqueda']) ? trim($_GET['busqueda']) : '';
$productos_por_pagina = 18;

if (!empty($productoBuscar)) {
    $rs = $productos->buscarProductos($productoBuscar);
} else {
    $rs = $productos->consultarProductos();
}

$totalProductos = is_array($rs) ? count($rs) : 0;
$rs = is_array($rs) ? $rs : [];

$totalPaginas = ceil($totalProductos / $productos_por_pagina);
$pagina = max(1, min($pagina, $totalPaginas));
$inicio = ($pagina - 1) * $productos_por_pagina;
$productosPagina = array_slice($rs, $inicio, $productos_por_pagina);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Farmacias XAD - Productos</title>
        <link rel="shortcut icon" href="../img/logos/FarmaciasXAD - FavIcon.jpg" type="image/x-icon" />
        <link rel="stylesheet" href="../vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/cssIndex.css">
        <link rel="stylesheet" href="../css/cssProductos.css">
        <script src="../vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <div class="contentPrincipal">
            <header class="header">
                <nav class="navbar navbar-expand-md custom-navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../../index.php">
                            <img src="../img/logos/FarmaciasXAD.jpg" width="200" alt="logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../index.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="" data-bs-target="#categoriesOffcanvas"
                                       href="productos.php">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="" href="servicios.php">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto.php">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <section class="contact-hero">
                <div class="container">
                    <h1 class="display-4">Nuestros Productos</h1>
                </div>
            </section>

            <main class="products-container">
                <div class="container">
                    <div class="search-container">
                        <form method="GET" action="productos.php" class="search-form">
                            <input type="text" name="busqueda" class="form-control search-input" 
                                   placeholder="Buscar productos por nombre..." value="<?php echo htmlspecialchars($productoBuscar); ?>">
                            <button type="submit" class="btn search-btn">
                                <i class="fas fa-search me-1"></i> Buscar
                            </button>
                        </form>
                    </div>

                    <?php if (!empty($productoBuscar)): ?>
                        <div class="results-info">
                            <strong><?php echo $totalProductos; ?></strong> resultados encontrados para "<?php echo htmlspecialchars($productoBuscar); ?>"
                            <a href="productos.php" class="clear-search"><i class="fas fa-times me-1"></i>Limpiar búsqueda</a>
                        </div>
                    <?php endif; ?>

                    <?php if ($totalProductos == 0): ?>
                        <div class="no-products">
                            <i class="fas fa-box-open"></i>
                            <h3>No hay productos disponibles</h3>
                            <p><?php echo!empty($productoBuscar) ? 'Intenta con otros términos de búsqueda.' : 'Por favor, vuelva a intentarlo más tarde.'; ?></p>
                        </div>
                    <?php else: ?>

                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="product-list">
                            <?php
                            foreach ($productosPagina as $index => $producto) {
                                $idProducto = $producto->idProducto;
                                $nombreProducto = $producto->nombre;
                                $stock = $producto->stock;
                                $precioProducto = number_format($producto->precio, 2);
                                $categoria = $producto->categoria;

                                // Determinar clase de stock según cantidad
                                $stockClass = 'stock-high';
                                if ($stock < 10) {
                                    $stockClass = 'stock-low';
                                } else if ($stock < 25) {
                                    $stockClass = 'stock-medium';
                                }

                                switch ($producto->categoria) {
                                    case 1: $categoria = 'Rebotica';
                                        break;
                                    case 2: $categoria = 'Perfumería';
                                        break;
                                    case 3: $categoria = 'Genéricos';
                                        break;
                                    case 4: $categoria = 'Patente';
                                        break;
                                    case 5: $categoria = 'Naturista';
                                        break;
                                    case 6: $categoria = 'Homeopatía';
                                        break;
                                }

                                echo "
                            <div class='col'>
                                <div class='card product-card h-100'>
                                    <img src='../../controller/productos/$producto->foto' class='product-image card-img-top' alt='$nombreProducto'>
                                    <div class='card-body d-flex flex-column'>
                                        <h5 class='card-title'>$nombreProducto</h5>
                                        <p class='product-category'><strong>Categoría:</strong> $categoria</p>
                                        <p class='product-stock $stockClass'><strong>Stock:</strong> $stock unidades</p>
                                        <div class='mt-auto'>
                                            <p class='product-price'>$$precioProducto</p>
                                            <button class='btn btn-primary w-100' data-bs-toggle='modal' data-bs-target='#productoModal' onclick='cargarDatosProducto(\"$idProducto\", \"$nombreProducto\", \"$stock\", \"$precioProducto\", \"../../controller/productos/$producto->foto\", \"$categoria\")'>
                                                <i class='fas fa-info-circle me-2'></i>Ver Detalles
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                            }
                            ?>
                        </div>

                        <?php if ($totalPaginas > 1): ?>
                            <div class="pagination-container">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <?php if ($pagina > 1): ?>
                                            <li class="page-item">
                                                <a class="page-link" href="?pagina=<?php echo $pagina - 1; ?><?php echo!empty($productoBuscar) ? '&busqueda=' . urlencode($productoBuscar) : ''; ?>" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <?php
                                        $inicioPagina = max(1, $pagina - 2);
                                        $finPagina = min($totalPaginas, $pagina + 2);

                                        for ($i = $inicioPagina; $i <= $finPagina; $i++):
                                            ?>
                                            <li class="page-item <?php echo $i == $pagina ? 'active' : ''; ?>">
                                                <a class="page-link" href="?pagina=<?php echo $i; ?><?php echo!empty($productoBuscar) ? '&busqueda=' . urlencode($productoBuscar) : ''; ?>">
                                                    <?php echo $i; ?>
                                                </a>
                                            </li>
                                        <?php endfor; ?>

                                        <?php if ($pagina < $totalPaginas): ?>
                                            <li class="page-item">
                                                <a class="page-link" href="?pagina=<?php echo $pagina + 1; ?><?php echo!empty($productoBuscar) ? '&busqueda=' . urlencode($productoBuscar) : ''; ?>" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>

                            <div class="text-center mt-2">
                                <small class="text-muted">Página <?php echo $pagina; ?> de <?php echo $totalPaginas; ?></small>
                            </div>
                        <?php endif; ?>

                    <?php endif; ?>
                </div>
            </main>

            <div class="modal fade" id="productoModal" tabindex="-1" aria-labelledby="productoModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productoModalLabel">Detalles del Producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img id="modal-product-image" src="" class="img-fluid rounded" alt="Producto">
                                </div>
                                <div class="col-md-6">
                                    <h3 id="modal-product-name"></h3>
                                    <p class="text-muted" id="modal-product-category"></p>
                                    <p id="modal-product-stock"></p>
                                    <h4 class="text-primary" id="modal-product-price"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <strong>Farmacias XAD</strong>
                            <p class="mb-0">
                                Rebótica, perfumería, genéricos, patente, naturista y homeopatía.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <p class="mb-1"><strong>Tel:</strong> (000) 123 4567</p>
                            <p class="mb-0"><strong>Email:</strong> contacto@farmaciasxad.com</p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <p class="mb-0">© 2025 Farmacias XAD. Todos los derechos reservados.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            function cargarDatosProducto(id, nombre, stock, precio, imagen, categoria) {
                document.getElementById('modal-product-name').textContent = nombre;
                document.getElementById('modal-product-price').textContent = `$${precio}`;
                document.getElementById('modal-product-stock').textContent = `Stock disponible: ${stock} unidades`;
                document.getElementById('modal-product-category').textContent = `Categoría: ${categoria}`;
                document.getElementById('modal-product-image').src = imagen;
            }
        </script>
    </body>
</html>