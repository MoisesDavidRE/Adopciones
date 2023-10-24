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
                <?php foreach($adopciones as $adopcion): ?>
                    <tr>
                        <td><?=$adopcion->idAdoptador ?></td>
                        <td><?=$adopcion->idMascota?></td>
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
</div>

