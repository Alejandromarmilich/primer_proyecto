<!-- Inicio de la barra de navegación -->

<nav class="navbar navbar-expand-lg bg-body-green">
    <div class="container-fluid">
        <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
        <!-- Logo de la empresa  -->
        <img src="./assets/img/glow_logo.webp" alt="logo marca" width='50' class='img-fluid logo-navbar'>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="principal">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="quienes_somos">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo">Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-primary" type="submit">Buscar</button>
            </form>
    </div>
  </div>
</nav>

<!-- Fin de la barra de navegación -->