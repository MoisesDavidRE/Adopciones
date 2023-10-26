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
                        <label for="nombre">Buscar por nombre</label>
                        <input type="text" class="form-control" name="nombre">
                        <label for="sexo">Buscar por edad</label>
                        <input type="numb" class="form-control" name="edad">

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
                <?php foreach($adoptadores as $adoptador): ?>
                    <tr>
                        <td><?=$adoptador->nombre . " ". $adoptador->apPaterno . " ". $adoptador->apMaterno ?></td>
                        <td><?=$adoptador->edad ?></td>
                        <td><?=$adoptador->telefono ?></td>
                        <td><?=$adoptador->email ?></td>
                        <td><?=$adoptador->estado . ", ". $adoptador->ciudad . ", CP " . $adoptador->cp. ", " . $adoptador->calle?></td>
                        <td>    
                            <a href="<?=base_url('index.php/alumno/delete/'.$adoptador->idAdoptador);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/alumno/editar/'.$adoptador->idAdoptador);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
   
</div>