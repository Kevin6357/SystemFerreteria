<div class="top-bar">

    <a href="<?php echo BASE_URL; ?>" class="logo">
        Ferreteria Bayron
    </a>

    <div class="search-box">
        <input type="text" placeholder="Buscar...">
        <button>
            <i class="bi bi-search"></i>
        </button>
    </div>

    <div class="user-menu">

        <button class="user-icon" id="userBtn">
            <i class="bi bi-person-fill"></i>
        </button>

        <div class="dropdown-menu" id="dropdownMenu">
            <a href="<?php echo BASE_URL; ?>/login">Iniciar Sesión</a>
            <a href="<?php echo BASE_URL; ?>/register">Registrarse</a>
        </div>

    </div>

</div>

<!-- BARRA DE CATEGORÍAS -->
<nav class="category-bar">
    <div class="category-container">
        <a href="#" class="category-item active">
            Marcas <span class="check">✔</span>
        </a>
        <a href="#" class="category-item">Amoladoras</a>
        <a href="#" class="category-item">Taladros</a>
        <a href="#" class="category-item">Atornilladores</a>
        <a href="#" class="category-item">Otros <span class="arrow">▼</span></a>
    </div>
</nav>