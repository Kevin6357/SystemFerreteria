<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Asistencia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Los assets usan rutas absolutas con BASE_URL para que funcionen sin importar la URL actual -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/landing.css">
</head>
<body>
    <!-- Fade overlay para transición de botón Ver demo -->
    <div id="fadeOverlay"></div>

    <!-- Menú móvil (overlay) fuera del nav para que position:fixed funcione siempre -->
    <?php require_once __DIR__ . '/../layouts/header.php'; ?>

    <!-- Sección principal con video de fondo -->
    <section class="stage">

        <video class="hero-video" autoplay muted loop playsinline>
            <source src="<?php echo BASE_URL; ?>/public/video/cual.mp4" type="video/mp4">
        </video>

        <!-- Navbar -->
        <nav class="navbar" id="navbar">
        </nav>

        <!-- Contenido hero -->
        <div class="hero-content">
            <button class="cta-btn demo-trigger" id="verDemo">Ver Mas   </button>
        </div>

        <!-- Scroll indicator -->
        <div class="scroll-indicator" id="scrollIndicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>

    </section>
    <!-- Sección Categorías -->
<section class="categories-section py-5 bg-white">
    <div class="container">

        <div class="d-flex justify-content-between align-items-end mb-5">
            <h2 class="fw-bold mb-0 categorias-title">CATEGORÍAS</h2>
        </div>

        <div class="row g-4 g-lg-5 justify-content-center">
            
            <div class="col-6 col-md-4 col-lg-2 text-center category-item">
                <div class="category-circle mx-auto">
                    <img src="<?php echo BASE_URL; ?>/public/image/maquinas.png" alt="Máquinas de soldar" class="category-img">
                </div>
                <p class="category-name mt-3">Máquinas de soldar</p>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center category-item">
                <div class="category-circle mx-auto">
                    <img src="<?php echo BASE_URL; ?>/public/image/amoledora.png" alt="Amoladoras" class="category-img">
                </div>
                <p class="category-name mt-3">Amoladoras</p>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center category-item">
                <div class="category-circle mx-auto">
                    <img src="<?php echo BASE_URL; ?>/public/image/atornillador.png" alt="Atornilladores" class="category-img">
                </div>
                <p class="category-name mt-3">Atornilladores</p>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center category-item">
                <div class="category-circle mx-auto">
                    <img src="<?php echo BASE_URL; ?>/public/image/demoledores.png" alt="Demoledores" class="category-img">
                </div>
                <p class="category-name mt-3">Demoledores</p>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center category-item">
                <div class="category-circle mx-auto">
                    <img src="<?php echo BASE_URL; ?>/public/image/rotomartillo.png" alt="Rotomartillos" class="category-img">
                </div>
                <p class="category-name mt-3">Rotomartillos</p>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center category-item">
                <div class="category-circle mx-auto">
                    <img src="<?php echo BASE_URL; ?>/public/image/taladro.png" alt="Taladros" class="category-img">
                </div>
                <p class="category-name mt-3">Taladros</p>
            </div>

        </div>

    </div>
</section>
<!-- SECCIÓN MARCAS -->
<section class="marcas-section py-5 bg-white">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">MARCAS</h2>
            <a href="#" class="text-dark fw-medium text-decoration-none">
                VER TODO <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="row g-3 g-md-4">

            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/dewalt.png" alt="DeWalt" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/crown.png" alt="Crown" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/mitoshi.png" alt="Mitoshi" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/bosch.png" alt="Bosch" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/warc.png" alt="Warc" class="img-fluid">
                </div>
            </div>

            <!-- Fila 2 -->
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/daf.png" alt="DAF" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/esab.png" alt="ESAB" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/miller.png" alt="Miller" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/neo.png" alt="Neo" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/alien.png" alt="Alien Weld" class="img-fluid">
                </div>
            </div>

            <!-- Fila 3 -->
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/bull.png" alt="Bull Welder" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/ptk.png" alt="FTK" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/boy.png" alt="Weld Boy" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                <div class="marca-box text-center p-3">
                    <img src="<?php echo BASE_URL; ?>/public/image/norstar.png" alt="Norstar" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-lg-2 d-none d-md-block">
                <!-- Espacio vacío para mantener alineación -->
            </div>

        </div>
    </div>
</section>
    <!-- Footer -->
    <?php include __DIR__ . '/../layouts/footer.php'; ?>
    <script src="<?php echo BASE_URL; ?>/public/js/landing.js"></script>
</body>
</html>
