<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Alumnos</h2>
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
                        <td><?=$adoptador->estado . ", ". $adoptador->ciudad . ", " . $adoptador->cp. ", " . $adoptador->calle?></td>
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
</div>
