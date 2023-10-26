<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>DIETAS</h2>
            <table class=" table table-bordered-stripped border-secondary">
                <thead>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha de creación</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                <?php foreach($dietas as $dieta): ?>
                    <tr>
                        <td><?=$dieta->nombre ?></td>
                        <td><?=$dieta->descripcion?></td>
                        <td>    
                            <a href="<?=base_url('index.php/adopcion/delete/'.$dieta->idDieta);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/adopcion/editar/'.$dieta->idDieta);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>
