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

            <form action="<?= base_url('mascota/insertar'); ?>" method="POST">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="animal" class="form-label">Animal</label>
                    <input type="text" class="form-control" name="animal" id="animal">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad </label>
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
                    <label for="idRaza">Raza</label>
                    <select name="idRaza" class="form-control">
                    <?php foreach($razas as $raza) : ?>
                            <option value="<?=$raza->idRaza ?>"><?=$raza->nombre ?></option>
                        <?php endforeach ?>
                    </select>
                    <a href="<?= base_url('raza/agregar') ?>" style="margin-left: 700px;" class="btn btn-outline-success">Registrar otra raza</a>
                </div>

                <label for="idDieta">Dieta</label>
                <div class="mb-3">
                    <select name="idDieta" class="form-control">
                    <?php foreach($dietas as $dieta) : ?>
                            <option value="<?=$dieta->idDieta ?>"><?=$dieta->nombre ?></option>
                        <?php endforeach ?>
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