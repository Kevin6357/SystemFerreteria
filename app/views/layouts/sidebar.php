<!--El archivo .htacces tiene este linea RewriteRule ^(.+)$ app/index.php?url=$1 [QSA,L] -->
<!--Detectamos en qué pagina estamos para marcar el link activo del siderbar(inicio,producto,...)-->
 <?php 
    $rutaActual = explode('/', trim($_GET['url'] ?? 'dashboard', '/'))[0] ?: 'dashboard';
 ?>

<!-- TOPBAR (solo visible en móvil) -->
<div class="topbar">
    <div class="title-business">
        <span><?php echo htmlspecialchars($usuario['nombre_usuario'] ?? 'Usuario'); ?></span>
    </div>
    <div class="btn-menu">
        <button class="hamburger" aria-label="Abrir menú">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</div>

<!-- OVERLAY -->
<div class="overlay"></div>

<!-- SIDEBAR -->
<aside class="sidebar">
    <div class="sidebar-logo"><?php echo htmlspecialchars($usuario['nombre_usuario'] ?? 'Usuario'); ?></div>
    <ul>
        <li>
            <a href="<?php echo BASE_URL; ?>/dashboard"
                class="<?php echo $rutaActual === 'dashboard' ? 'activo' : ''   ; ?>" >
                <i class="fa-solid fa-house"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/compras"
                class="<?php echo $rutaActual === 'compras' ? 'activo' : ''; ?>"> 
                 <i class="fa-solid fa-cart-shopping"></i>
                <span>Compras</span>
            </a>
        </li>
               <li>
            <a href="<?php echo BASE_URL; ?>/recibidos"
                class="<?php echo $rutaActual === 'recibidos' ? 'activo' : ''; ?>"> 
                <i class="fa-solid fa-box-open"></i>
                <span>Recibidos</span>
            </a>
        </li>
               <li>
            <a href="<?php echo BASE_URL; ?>/devoluciones"
                class="<?php echo $rutaActual === 'devoluciones' ? 'activo' : ''; ?>"> 
                <i class="fa-solid fa-rotate-left"></i>
                <span>Devoluciones</span>
            </a>
        </li>
               <li>
            <a href="<?php echo BASE_URL; ?>/stocks"
                class="<?php echo $rutaActual === 'stocks' ? 'activo' : ''; ?>"> 
                <i class="fa-solid fa-warehouse"></i>
                <span>Stocks</span>
            </a>
        </li>
               <li>
            <a href="<?php echo BASE_URL; ?>/proveedores"
                class="<?php echo $rutaActual === 'proveedores' ? 'activo' : ''; ?>"> 
                <i class="fa-solid fa-boxes-packing"></i>
                <span>Proveedores</span>
            </a>
        </li>
        <li class="nav-logout">
            <a href="<?php echo BASE_URL; ?>/logout" id="btn-logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Cerrar sesión</span>
            </a>
        </li>
    </ul>
</aside>