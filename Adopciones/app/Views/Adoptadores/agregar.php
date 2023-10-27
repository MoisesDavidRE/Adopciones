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
                <input type="hidden" name ="idAdoptador"/>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>

                <div class="mb-3">
                    <label for="apPaterno" class="form-label">Apellido Paterno </label>
                    <input type="text" class="form-control" name="apPaterno" id="apPaterno">
                </div>

                <div class="mb-3">
                    <label for="apMaterno">Apellido Materno</label>
                    <input type="text" class="form-control" name="apMaterno" id="apMaterno">
                </div>
                
                <div class="mb-3">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" name="edad" id="edad">
                </div>

                <div class="mb-3">
                    <label for="telefono">Teléfono de contacto</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>


                <div class="mb-3">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado" >
                </div>

                <div class="mb-3">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" id="ciudad" >
                </div>

                <div class="mb-3">
                    <label for="cp">C.P.</label>
                    <input type="number" class="form-control" name="cp" id="cp">
                </div>

                <div class="mb-3">
                    <label for="calle">Calle</label>
                    <input type="text" class="form-control" name="calle" id="calle">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-1"></div>
    </div>
</div>