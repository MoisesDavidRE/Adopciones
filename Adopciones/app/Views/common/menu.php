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
          <ul class="dropdown-menu" data-bs-theme="dark" >
            <li><a class="dropdown-item" href="<?= base_url('/mascota/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/mascota/agregar'); ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/mascota/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Adoptadores
          </a>
          <ul class="dropdown-menu " data-bs-theme="dark" >
            <li><a class="dropdown-item" href="<?= base_url('/adoptador/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/adoptador/agregar'); ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/adoptador/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Adopciones
          </a>
          <ul class="dropdown-menu" data-bs-theme="dark">
            <li><a class="dropdown-item" href="<?= base_url('/adopcion/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/adopcion/agregar'); ?>">Agregar </a></li>
            <li><a class="dropdown-item" href="<?= base_url('/adopcion/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Razas
          </a>
          <ul class="dropdown-menu" data-bs-theme="dark">
            <li><a class="dropdown-item" href="<?= base_url('/raza/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/raza/agregar'); ?>">Agregar </a></li>
            <li><a class="dropdown-item" href="<?= base_url('/raza/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dietas
          </a>
          <ul class="dropdown-menu" data-bs-theme="dark">
            <li><a class="dropdown-item" href="<?= base_url('/dieta/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/dieta/agregar'); ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/dieta/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>