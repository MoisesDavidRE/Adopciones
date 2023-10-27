<!-- Tarjetas de cada mascota -->

<div class="container">
    <div class="row">
        <div class="col-2"></div>

        <div class="container">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-5">
                    <h2 class="mb-5"> BUSCAR ADOPCION</h2>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?= base_url('index.php/adopcion/buscar/'); ?>" method="GET" class="mb-5">
                        <div class="mb-3">
                            <label for="idMascota" class="form-label">Buscar por mascota</label>
                            <select name="idMascota" class="form-control">
                                <option value="" default></option>
                                <?php foreach ($mascotas as $mascota): ?>
                                    <option value="<?= $mascota->idMascota ?>">
                                        <?= $mascota->nombre ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="idAdoptador" class="form-label">Buscar por adoptador</label>
                            <select name="idAdoptador" class="form-control">
                                <option value="" default></option>
                                <?php foreach ($adoptadores as $adoptador): ?>
                                    <option value="<?= $adoptador->idAdoptador ?>"><?= $adoptador->nombre .
                                         " " . $adoptador->apPaterno . " " . $adoptador->apMaterno ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-success mt-4" value="Buscar">
                    </form>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
                <th>Nombre completo</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
            </thead>
            <tbody>
                <?php foreach ($adopciones as $adopcion): ?>
                    <tr>
                        <td>
                            <?php
                        $db = \Config\Database::connect();
                        $idAdoptador = $adopcion->idAdoptador;
                        $query = "SELECT nombre,apPaterno,apMaterno FROM adoptador WHERE idAdoptador = $idAdoptador";
                        $resultado = $db->query($query)->getResultArray();
                        if (!$resultado) {
                            echo mysqli_error($db);
                        } else
                            echo $resultado[0]["nombre"] . " " . $resultado[0]["apPaterno"]. " " .$resultado[0]["apMaterno"];
                        ?>
                        </td>
                        <td>
                        <?php
                        $db = \Config\Database::connect();
                        $idMascota = $adopcion->idMascota;
                        $query = "SELECT nombre FROM mascota WHERE idMascota = $idMascota";
                        $resultado = $db->query($query)->getResultArray();
                        if (!$resultado) {
                            echo mysqli_error($db);
                        } else
                            echo $resultado[0]["nombre"];
                        ?>
                        </td>
                        <td>
                            <?= $adopcion->fechaAdopcion ?>
                        </td>
                        <td>
                            <?= $adopcion->estatus ?>
                        </td>
                        <td>
                            <a href="<?= base_url('index.php/adopcion/delete/' . $adopcion->idAdopcion); ?>">Eliminar</a>
                            <a href="<?= base_url('index.php/adopcion/editar/' . $adopcion->idAdopcion); ?>">Editar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>

</div>