<!-- Tarjetas de cada mascota -->

<div class="container">
    <div class="row">
        <div class="col-2"></div>

        <div class="container">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-5">
                    <h2 class="mb-5"> BUSCAR MASCOTAS</h2>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?= base_url('index.php/mascota/buscar/'); ?>" method="GET" class="mb-5">

                        <label for="nombre">Buscar por nombre</label>
                        <input type="text" class="form-control" name="nombre" class="mb-5">

                        <label for="animal">Buscar por Animal</label>
                        <input type="text" class="form-control" name="animal" class="mb-5">

                        <label for="sexo">Buscar por sexo</label>
                        <select name="sexo" class="form-control">
                            <option value=""></option>
                            <option value="Macho">Macho</option>
                            <option value="Hembra">Hembra</option>
                        </select class="mb-5">

                        <label for="edad">Buscar por Edad</label>
                        <input type="number" class="form-control" name="edad" class="mb-5">

                        <label for="color">Buscar por Color</label>
                        <input type="text" class="form-control" name="color" class="mb-5">

                        <label for="tamanio">Buscar por Tamaño</label>
                        <input type="text" class="form-control" name="tamanio" class="mb-5">

                        <label for="peso">Buscar por peso</label>
                        <input type="number" class="form-control" name="peso" class="mb-5">


                        <div class="mb-3">
                            <label for="idRaza" class="form-label">Buscar por raza</label>
                            <select name="idRaza" class="form-control">
                                <option value="" default></option>
                                <?php foreach ($razas as $raza): ?>
                                    <option value="<?= $raza->idRaza ?>">
                                        <?= $raza->nombre ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="idDieta" class="form-label">Buscar por dieta</label>
                            <select name="idDieta" class="form-control">
                                <option value="" default></option>
                                <?php foreach ($dietas as $dieta): ?>
                                    <option value="<?= $dieta->idDieta ?>"><?= $dieta->nombre?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <!-- <div class="mb-3">
                            <label for="idRaza">Buscar por raza</label>
                            <select name="idRaza" class="form-control">
                                <option value=" " default></option>
                                <?php foreach ($razas as $raza): ?>
                                    <option value="<?= $raza->idRaza ?>">
                                        <?= $raza->nombre ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <label for="idDieta">Buscar por dieta</label>
                        <div class="mb-3">
                            <select name="idDieta" class="form-control">
                            <option value=" " default></option>
                                <?php foreach ($dietas as $dieta): ?>
                                    <option value="<?= $dieta->idDieta ?>">
                                        <?= $dieta->nombre ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div> -->

                        <input type="submit" class="btn btn-success mt-4" value="Buscar">
                    </form>
                </div>
            </div>
        </div>

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
                        } else
                            echo $resultado[0]["nombre"];
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
                        } else
                            echo $resultado[0]["nombre"];
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