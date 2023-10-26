    <!-- Tarjetas de cada mascota -->

<div class="container">
    <div class="row">
        <div class="col-2"></div>

        <div class="container">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-5">
                    <h2 class="mb-5"> BUSCAR ADOPTADOR</h2>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?= base_url('index.php/adoptador/buscar/'); ?>" method="GET" class="mb-5">
                        <label for="estatus">Buscar por nombre</label>
                        <input type="text" class="form-control" name="nombre">
                        <label for="mascota">Buscar por edad</label>
                        <input type="int" class="form-control" name="edad">

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
                <?php foreach($adopciones as $adopcion): ?>
                    <tr>
                        <td><?=$adopcion->idAdoptador?></td>
                        <td><?=$adopcion->idMascota ?></td>
                        <td><?=$adopcion->fechaAdopcion ?></td>
                        <td><?=$adopcion->estatus ?></td>
                        <td>    
                            <a href="<?=base_url('index.php/adopcion/delete/'.$adopcion->idAdopcion);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/adopcion/editar/'.$adopcion->idAdopcion);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
   
</div>