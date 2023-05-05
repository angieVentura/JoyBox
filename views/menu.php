<nav class="navbar navbar-expand-lg navbar-light  navbar-custom" aria-label="Fifth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <div class="img_logo">
                <img src="img/logo_JoyBox.png" alt="JoyBox" class="logo">
                <img src="img/JoyBox.png" alt="" class="n_logo">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($view == "home" ? "activo" : "no-activo"); ?>" id="inicio-m" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php echo ($view == "sobre_nosotros" ? "activo" : "no-activo"); ?>" aria-current="page" href="sobre_nosotros.php">Sobre Nosotros</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php echo ($view == "contacto" ? "activo" : "no-activo"); ?>" aria-current="page" href="contacto.php">Contacto</a>
                </li>
            </ul>
            <div class="redes">
                <a href="https://matias.ma/nsfw/" target="_blank" class="no_tocar redes_menu bi bi-instagram <?php echo ($view == 'home' ? 'blanco' : 'rojo'); ?>"></a>
                <a href="https://www.tiktok.com/@gamewise_et26?lang=es" target="_blank" class="no_tocar redes_menu bi bi-tiktok red <?php echo ($view == 'home'  ? 'blanco' : 'rojo'); ?>"></a>
                <a href="https://twitter.com/GameWise_et26" target="_blank" class="no_tocar redes_menu bi bi-twitter <?php echo ($view == 'home' ? 'blanco' : 'rojo'); ?>"></a>
            </div>

            <button type="button" class="btn btn-outline-light descarga-bnt <?php echo ($view == 'home' ? 'blanco' : 'rojo'); ?>" id="des-bnt-menu<?php echo ($view == 'home' ? '-blanco' : '-rojo'); ?>">Descargar</button>
        </div>
    </div>
</nav>