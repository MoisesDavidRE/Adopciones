<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Adopciones</h2>
            <table class=" table table-bordered-stripped border-secondary">
                <thead>
                    <th>Adoptador</th>
                    <th>Mascota</th>
                    <th>Fecha de adopción</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
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
                                    // Error al conectar a la base de datos
                                    echo mysqli_error($db);
                                } else
                                    echo $resultado[0]["nombre"] . " " . $resultado[0]["apPaterno"] . " " . $resultado[0]["apMaterno"];
                                ?>
                            </td>
                            <td>
                                <?php
                                $db = \Config\Database::connect();
                                $idMascota = $adopcion->idMascota;
                                $query = "SELECT nombre FROM mascota WHERE idMascota = $idMascota";
                                $resultado = $db->query($query)->getResultArray();
                                if (!$resultado) {
                                    // Error al conectar a la base de datos
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
                                <a
                                    href="<?= base_url('index.php/adopcion/delete/' . $adopcion->idAdopcion); ?>">Eliminar</a>
                                <a href="<?= base_url('index.php/adopcion/editar/' . $adopcion->idAdopcion); ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>