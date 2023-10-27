<!-- Tarjetas de cada mascota -->

<div class="container">
    <div class="row">
        <div class="col-2"></div>

        <div class="container">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-5">
                    <h2 class="mb-5"> BUSCAR RAZA</h2>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?= base_url('index.php/raza/buscar/'); ?>" method="GET" class="mb-5">
                        <label for="nombre">Buscar por nombre</label>
                        <input type="text" class="form-control" name="nombre">
                        <label for="descripcion">Buscar por descripción</label>
                        <input type="text" class="form-control" name="descripcion">

                        <input type="submit" class="btn btn-success mt-4" value="Buscar">
                    </form>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
                <th>Nombre de la raza</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php foreach ($razas as $raza): ?>
                    <tr>
                        <td><?= $raza->nombre ?></td>
                        <td><?= $raza->descripcion ?></td>
                        <td>
                            <a href="<?= base_url('index.php/adopcion/delete/' . $raza->idRaza); ?>">Eliminar</a>
                            <a href="<?= base_url('index.php/adopcion/editar/' . $raza->idRaza); ?>">Editar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>