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

            <form action="<?= base_url('/adopcion/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name ="idAdopcion" value="<?= $adopcion->idAdopcion ?>" />
                <div class="mb-3">
                    <label for="idAdoptador" class="form-label">Adoptador</label>
                    <select name="idAdoptador" class="form-control">
                        <option value="<?= $adopcion->idAdoptador?>" default>
                        <?php
                        $db = \Config\Database::connect();
                        $idAdoptador = $adopcion->idAdoptador;
                        $query = "SELECT nombre,apPaterno,apMaterno FROM adoptador WHERE idAdoptador = $idAdoptador";
                        $resultado = $db->query($query)->getResultArray();
                        if (!$resultado) {
                            // Error al conectar a la base de datos
                            echo mysqli_error($db);
                        } else
                            echo $resultado[0]["nombre"]." ".$resultado[0]["apPaterno"]." ".$resultado[0]["apMaterno"];
                        ?>
                    </option>
                    <?php foreach($adoptadores as $adoptador) : ?>
                            <option value="<?=$adoptador->idAdoptador ?>"><?=$adoptador->nombre . 
                            " " . $adoptador->apPaterno . " " . $adoptador->apMaterno ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="idMascota" class="form-label">Mascota</label>
                    <select name="idMascota" class="form-control">
                    <option value="<?= $adopcion->idMascota?>" default>
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
                    </option>
                    <?php foreach($mascotas as $mascota) : ?>
                            <option value="<?=$mascota->idMascota ?>"><?=$mascota->nombre?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fechaAdopcion">Fecha de adopción</label>
                    <input type="date" class="form-control" name="fechaAdopcion" id="fechaAdopcion">
                </div>
                
                <div class="mb-3">
                    <label for="tamanio">Estatus</label>
                    <select name="estatus" id="estatus">
                        <option value="Confirmada">Confirmada</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="En revision">En revisión</option>
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