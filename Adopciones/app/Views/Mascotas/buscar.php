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
                        <input type="text" class="form-control" name="nombre">
                        <label for="sexo">Buscar por sexo</label>
                        <select name="sexo" class="form-control">
                            <option value=""></option>
                            <option value="Macho">Macho</option>
                            <option value="Hembra">Hembra</option>
                        </select>
                        <input type="submit" class="btn btn-success mt-4" value="Buscar">
                    </form>
                </div>
            </div>
            </div>

            <?php foreach ($mascotas as $mascota): ?>
                <div class="card" style="width: 20.5rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $mascota->nombre ?>
                        </h5>
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
                            <?= $mascota->peso ?>
                        </p>
                        <a href="<?= base_url('/mascota/editar/' . $mascota->idMascota); ?>" class="btn btn-primary">Editar
                            datos</a>
                        <a href="<?= base_url('/mascota/delete/' . $mascota->idMascota) ?>"
                            class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
   
</div>