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

            <form action="<?= base_url('mascota/editar/'.$mascota->idMascota); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name ="idMascota" value="<?= $mascota->idMascota ?>" />
                <div class="mb-3">
                    <label for="animal" class="form-label">Animal</label>
                    <input type="text" class="form-control" name="animal" id="animal" value="<?= $mascota->animal; ?>">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $mascota->nombre; ?>">
                </div>

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad </label>
                    <input type="number" class="form-control" name="edad" id="edad" value="<?= $mascota->edad; ?>">
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <?php if ($mascota->sexo == "Macho"): ?>
                            <option value="Macho" selected>Macho</option>
                            <option value="Hembra">Hembra</option>
                        <?php else: ?>
                            <option value="Macho" >Macho</option>
                            <option value="Hembra" selected>Hembra</option>
                        <?php endif ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" name="color" id="color" value="<?= $mascota->color; ?>">
                </div>
                
                <div class="mb-3">
                    <label for="tamanio">Tamaño de largo en CM</label>
                    <input type="number" class="form-control" name="tamanio" id="tamanio" value="<?= $mascota->tamanio; ?>">
                </div>

                <div class="mb-3">
                    <label for="peso">Peso en KG</label>
                    <input type="number" class="form-control" name="peso" id="peso" value="<?= $mascota->peso; ?>">
                </div>

                <div class="mb-3">
                    <label for="idRaza">Raza</label>
                    <select name="idRaza" class="form-control">
                    <option value="<?= $mascota->idRaza?>" default>
                    <?php
                        $db = \Config\Database::connect();
                        $idRaza = $mascota->idRaza;
                        $query = "SELECT nombre FROM raza WHERE idRaza = $idRaza";
                        $resultado = $db->query($query)->getResultArray();
                        if (!$resultado) {
                            // Error al conectar a la base de datos
                            echo mysqli_error($db);
                        } else
                            echo $resultado[0]["nombre"];
                        ?>
                    </option>
                       <?php foreach($razas as $raza) : ?>
                            <option value="<?=$raza->idRaza ?>"><?=$raza->nombre ?></option>
                        <?php endforeach ?>
                    </select>
                    <a href="<?= base_url('raza/agregar') ?>" style="margin-left: 700px;" class="btn btn-outline-success">Registrar otra raza</a>
                </div>

                <label for="idDieta">Dieta</label>
                <div class="mb-3">
                    <select name="idDieta" class="form-control">
                    <option value="<?= $mascota->idDieta ?>" default>
                    <?php
                        $db = \Config\Database::connect();
                        $idDieta = $mascota->idDieta;
                        $query = "SELECT nombre FROM dieta WHERE idDieta = $idDieta";
                        $resultado = $db->query($query)->getResultArray();
                        if (!$resultado) {
                            // Error al conectar a la base de datos
                            echo mysqli_error($db);
                        } else
                            echo $resultado[0]["nombre"];
                        ?>
                    </option>
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