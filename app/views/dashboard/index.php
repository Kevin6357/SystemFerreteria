    <!DOCTYPE html>
    <html lang="Es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo TITLE_BUSINESS; ?> - Panel de Administración</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/dashboard.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/loader.css">
    </head>
  <script src="<?php echo BASE_URL; ?>/public/js/loader.js"></script>
    <body>
<div id="page-loader">

    <section class="loader">
        <div><div><span class="one h6"></span><span class="two h3"></span></div></div>
        <div><div><span class="one h1"></span></div></div>
        <div><div><span class="two h2"></span></div></div>
        <div><div><span class="one h4"></span></div></div>
    </section>

</div>
    <?php include __DIR__ . '/../layouts/sidebar.php'; ?>

    <!-- CONTENIDO PRINCIPAL -->
    <main>
        <nav class="breadcrumb">
            <span>Inicio</span>
            <i class="fa-solid fa-chevron-right"></i>
            <span id="breadcrumb-page">Dashboard</span>
        </nav>
        <div class="main-content">
            <div class="table-responsive">
            </div>
        </div>
    </main>
    <script src="<?php echo BASE_URL; ?>/public/js/dashboard.js"></script>
    </body>

    </html>
