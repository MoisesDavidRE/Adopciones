<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('/') ?>">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mascotas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/mascota/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/mascota/agregar'); ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/mascota/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Adoptadores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/adoptador/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/adoptador/agregar'); ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/adoptador/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Adopciones
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/adopcion/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/adopcion/agregar'); ?>">Agregar </a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/adopcion/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Razas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/raza/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/raza/agregar'); ?>">Agregar </a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/raza/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dietas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/dieta/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/dieta/agregar'); ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/dieta/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>