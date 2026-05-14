<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE_BUSINESS; ?> - Proveedores</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php include __DIR__ . '/../layouts/sidebar.php'; ?>

<main>

    <nav class="breadcrumb">
        <span>Dashboard</span>
        <i class="fa-solid fa-chevron-right"></i>
        <span>Provedores</span>
        <i class="fa-solid fa-chevron-right"></i>
        <span id="breadcrumb-page">Reportes</span>
    </nav>

    <div class="main-content">
        <div class="table-responsive">

            <?php if(empty($compras)): ?>
                <p>No hay registros</p>

            <?php else: ?>

                <table class="table table-bordered text-center align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>telefono</th>
                            <th>direccion</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach($compras as $compritas): ?>

                            <tr>
                                <td><?php echo $compritas['id']; ?></td>
                                <td><?php echo $compritas['nombre']; ?></td>
                                <td><?php echo $compritas['telefono']; ?></td>
                                <td><?php echo $compritas['direccion']; ?></td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            <?php endif; ?>

        </div>
    </div>

</main>

<script src="<?php echo BASE_URL; ?>/public/js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>