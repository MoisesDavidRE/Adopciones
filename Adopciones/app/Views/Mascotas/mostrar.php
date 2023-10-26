<!-- Tarjetas de cada mascota -->

<div class="container">
    <div class="row">
        <div class="col-2"></div>

        <div class="container">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-1">
                    <h2 class="mb-5">MASCOTAS</h2>
                </div>
            </div>
        </div>


        <!-- Módulo de búsqueda y adición de mascota-->
        <div class="container">
            <div class="row">
                <div class="mb-5">
                    <a class="btn btn-outline-success mb-2" type="submit"
                        href="<?= base_url('/mascota/agregar') ?>">Agregar nueva mascota</a>
                    <a class="btn btn-outline-success mb-2" type="submit"
                        href="<?= base_url('/mascota/buscar') ?>">Buscar mascota</a>

                </div>
            </div>
        </div>

        <!-- Tarjeta para cada animal -->
        <?php foreach ($mascotas as $mascota): ?>
            <div class="card" style="width: 20.5rem;">

                <div class="card-body">
                    <h3 class="card-title">
                        <?= $mascota->nombre ?>
                    </h3>
                    <p class="card-text">Animal:
                        <?= $mascota->animal ?>
                    </p>
                    <p class="card-text">Edad:
                        <?= $mascota->edad ?> años
                    </p>
                    <p class="card-text">Sexo:
                        <?= $mascota->sexo ?>
                    </p>
                    <p class="card-text">Color:
                        <?= $mascota->color ?>
                    </p>
                    <p class="card-text">Tamaño:
                        <?= $mascota->tamanio ?>
                    </p>
                    <p class="card-text">Peso:
                        <?= $mascota->peso ?> Kg
                    </p>

                    <p class="card-text">
                    <?php
                        $db = \Config\Database::connect();
                        $idRaza = $mascota->idRaza;
                        $query = "SELECT nombre FROM raza WHERE idRaza = $idRaza";
                        $resultado = $db->query($query)->getResultArray();
                        if (!$resultado) {
                            // Error al conectar a la base de datos
                            echo mysqli_error($db);
                        }
                        else echo $resultado[0]["nombre"];
                        ?>
                    </p>
                    <p class="card-text">
                        <?php
                        $db = \Config\Database::connect();
                        $idDieta = $mascota->idDieta;
                        $query = "SELECT nombre FROM dieta WHERE idDieta = $idDieta";
                        $resultado = $db->query($query)->getResultArray();
                        if (!$resultado) {
                            // Error al conectar a la base de datos
                            echo mysqli_error($db);
                        }
                        else echo $resultado[0]["nombre"];
                        ?>
                    </p>
                    <a href="<?= base_url('/mascota/editar/' . $mascota->idMascota); ?>"
                        class="btn btn-outline-primary">Editar
                        datos</a>
                    <a href="<?= base_url('/mascota/delete/' . $mascota->idMascota) ?>"
                        class="btn btn-outline-danger">Eliminar</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>