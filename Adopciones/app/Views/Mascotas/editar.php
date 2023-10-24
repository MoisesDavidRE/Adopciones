<div class="container">
    <div class="row">
        <div class="col-8">





            <h2>Editar mascota</h2>
            <form action="<?= base_url('mascota/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idMascota" value="<?= $mascota->idMascota; ?>" />
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $mascota->nombre; ?>">
                </div>

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad </label>
                    <input type="number" class="form-control" name="edad" id="edad"
                  value="<?= $mascota->edad ?>">
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
                    <input type="submit" class="btn btn-success">
                </div>
            </form>








        </div>
    </div>
</div>