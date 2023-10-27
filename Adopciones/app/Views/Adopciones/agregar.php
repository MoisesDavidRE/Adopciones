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

            <form action="<?= base_url('/adopcion/agregar'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="idAdoptador" class="form-label">Adoptador</label>
                    <select name="idAdoptador" class="form-control">
                        <option value="" default></option>
                    <?php foreach($adoptadores as $adoptador) : ?>
                            <option value="<?=$adoptador->idAdoptador ?>"><?=$adoptador->nombre . 
                            " " . $adoptador->apPaterno . " " . $adoptador->apMaterno ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="idMascota" class="form-label">Mascota</label>
                    <select name="idMascota" class="form-control">
                    <option value="" default></option>
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