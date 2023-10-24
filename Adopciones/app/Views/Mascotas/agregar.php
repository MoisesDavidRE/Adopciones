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
                <div class="col-5">
                    <h2 class="mb-5">AGREGAR MASCOTA</h2>
                </div>
            </div>
        </div>

            <form action="<?= base_url('mascota/agregar'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>

                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Edad </label>
                    <input type="number" class="form-control" name="edad" id="edad">
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <option default value=""></option>
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" name="color" id="color">
                </div>
                
                <div class="mb-3">
                    <label for="tamanio">Tamaño de largo en CM</label>
                    <input type="number" class="form-control" name="tamanio" id="tamanio">
                </div>

                <div class="mb-3">
                    <label for="peso">Peso en KG</label>
                    <input type="number" class="form-control" name="peso" id="peso">
                </div>

                <div class="mb-3">
                    <label for="tamanio">Tamaño de largo en CM</label>
                    <input type="number" class="form-control" name="tamanio" id="tamanio">
                </div>

                <label for="Raza">Raza</label>
                <div class="mb-3">
                    <select name="idGrado" class="form-control">

                    </select>
                </div>


                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-1"></div>
    </div>
</div>