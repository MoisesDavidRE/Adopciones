<!-- Tarjetas de cada mascota -->

<div class="container">
    <div class="row">
        <div class="col-2"></div>

        <div class="container">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-5">
                    <h2 class="mb-5"> BUSCAR DIETA</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?= base_url('index.php/adoptador/buscar/'); ?>" method="GET" class="mb-5">
                        <label for="estatus">Buscar por nombre</label>
                        <input type="text" class="form-control" name="nombre">
                        <label for="mascota">Buscar por tipo</label>
                        <input type="int" class="form-control" name="edad">

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
                <?php foreach ($dietas as $dieta): ?>
                    <tr>
                        <td><?= $dieta->nombre ?></td>
                        <td><?= $dieta->descripcion ?></td>
                        <td>
                            <a href="<?= base_url('index.php/adopcion/delete/' . $dieta->idDieta); ?>" 
                            class = "btn btn-outline-danger">Eliminar</a>
                            <a href="<?= base_url('index.php/adopcion/editar/' . $dieta->idDieta); ?>"
                            class = "btn btn-outline-primary">Editar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>