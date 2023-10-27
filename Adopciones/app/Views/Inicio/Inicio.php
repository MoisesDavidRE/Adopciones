<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div id="carouselExampleInterval" class="carousel slide carousel-container" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2500">
                        
                        <img src="<?= base_url('assets/images/Adopciones.jpg'); ?>" class="d-block w-100"
                            alt="Adopciones">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><a  href="<?= base_url('/adopcion/mostrar') ?>">Adopciones</a></h2>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <img src="<?= base_url('assets/images/Adoptador.jpg'); ?>" class="d-block w-100"
                            alt="Adoptador">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><a  href="<?= base_url('/adoptador/mostrar') ?>">Adoptadores</a></h2>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <img src="<?= base_url('assets/images/Mascotas.jpg'); ?>" class="d-block w-100" alt="Mascotas">
                        <div class="carousel-caption d-none d-md-block">
                        <h2><a  href="<?= base_url('/mascota/mostrar') ?>">Mascotas</a></h2>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <img src="<?= base_url('assets/images/Dietas.jpg'); ?>" class="d-block w-100" alt="Dietas">
                        <div class="carousel-caption d-none d-md-block">
                        <h2><a  href="<?= base_url('/dieta/mostrar') ?>">Dietas</a></h2>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <img src="<?= base_url('assets/images/Raza.jpg'); ?>" class="d-block w-100" alt="Razas">
                        <div class="carousel-caption d-none d-md-block">
                        <h2><a  href="<?= base_url('/raza/mostrar') ?>">Razas</a></h2>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>