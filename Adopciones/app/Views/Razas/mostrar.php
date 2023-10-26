<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Razas</h2>
            <table class=" table table-bordered-stripped border-secondary">
                <thead>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha de creación</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                <?php foreach($razas as $raza): ?>
                    <tr>
                        <td><?=$raza->nombre ?></td>
                        <td><?=$raza->descripcion?></td>
                        <td><?=$raza->created_at ?></td>
                        <td>    
                            <a href="<?=base_url('index.php/adopcion/delete/'.$raza->idRaza);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/adopcion/editar/'.$raza->idRaza);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>
