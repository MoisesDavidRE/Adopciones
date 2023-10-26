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
                    <h2 class="mb-5">AGREGAR ADOPTADOR</h2>
                </div>
            </div>
        </div>

            <form action="<?= base_url('/adoptador/agregar'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>

                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Apellido Paterno </label>
                    <input type="number" class="form-control" name="edad" id="edad">
                </div>

                <div class="mb-3">
                    <label for="color">Apellido Materno</label>
                    <input type="text" class="form-control" name="color" id="color">
                </div>
                
                <div class="mb-3">
                    <label for="tamanio">Edad</label>
                    <input type="number" class="form-control" name="tamanio" id="tamanio">
                </div>

                <div class="mb-3">
                    <label for="peso">Teléfono de contacto</label>
                    <input type="number" class="form-control" name="peso" id="peso">
                </div>

                <div class="mb-3">
                    <label for="tamanio">Email</label>
                    <input type="number" class="form-control" name="tamanio" id="tamanio">
                </div>


                <div class="mb-3">
                    <label for="tamanio">Estado</label>
                    <input type="number" class="form-control" name="tamanio" id="tamanio">
                </div>

                <div class="mb-3">
                    <label for="tamanio">Ciudad</label>
                    <input type="number" class="form-control" name="tamanio" id="tamanio">
                </div>

                <div class="mb-3">
                    <label for="tamanio">C.P.</label>
                    <input type="number" class="form-control" name="tamanio" id="tamanio">
                </div>

                <div class="mb-3">
                    <label for="tamanio">Calle</label>
                    <input type="text" class="form-control" name="tamanio" id="tamanio">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-1"></div>
    </div>
</div>