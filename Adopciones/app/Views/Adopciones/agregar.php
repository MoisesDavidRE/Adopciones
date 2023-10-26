<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>
        <div class="col-8">

        <div class="container">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <h2 class="mb-5">REGISTRAR ADOPCIÓN</h2>
                </div>
            </div>
        </div>

            <form action="<?= base_url('/adopcion/agregar'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Adoptador</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>

                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Mascota</label>
                    <input type="number" class="form-control" name="edad" id="edad">
                </div>

                <div class="mb-3">
                    <label for="color">Fecha de adopción</label>
                    <input type="text" class="form-control" name="color" id="color">
                </div>
                
                <div class="mb-3">
                    <label for="tamanio">Estatus</label>
                    <input type="number" class="form-control" name="tamanio" id="tamanio">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-1"></div>
    </div>
</div>