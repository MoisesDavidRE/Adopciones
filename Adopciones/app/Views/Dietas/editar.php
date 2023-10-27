<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>
        <div class="col-8">

        <div class="container">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <h2 class="mb-5">AGREGAR DIETA</h2>
                </div>
            </div>
        </div>

            <form action="<?= base_url('/dieta/update'); ?>" method="POST">
                <?= csrf_field() ?>

                <input type="hidden" name ="idDieta" value="<?= $dieta->idDieta ?>" />
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de la dieta</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$dieta->nombre ?>">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción de la dieta</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?=$dieta->descripcion ?>">
                </div>

                <div class="mb-3">
                    <label for="alimentosExcluidos" class="form-label">Alimentos excluidos</label>
                    <input type="text" class="form-control" name="alimentosExcluidos" id="alimentosExcluidos" value="<?=$dieta->alimentosExcluidos ?>">
                </div>

                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo de dieta</label>
                    <select name="tipo" id="tipo">
                        <option value="<?=$dieta->tipo?>" default> value="<?=$dieta->tipo ?>"</option>
                        <option value="Vegetariana">Vegetariana</option>
                        <option value="Carnívora">Carnívora</option>
                        <option value="Omnívora">Omnívora</option>
                        <option value="Insectívora">Insectívora</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="proteinas" class="form-label">Proteínas que aporta la dieta</label>
                    <input type="number" class="form-control" name="proteinas" id="proteinas" value="<?=$dieta->proteinas ?>">
                </div>

                <div class="mb-3">
                    <label for="carbohidratos" class="form-label">Carbohidratos que aporta la dieta</label>
                    <input type="number" class="form-control" name="carbohidratos" id="carbohidratos" value="<?=$dieta->carbohidratos ?>">
                </div>

                <div class="mb-3">
                    <label for="grasas" class="form-label">Grasas que aporta la dieta</label>
                    <input type="number" class="form-control" name="grasas" id="grasas" value="<?=$dieta->grasas ?>">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-1"></div>
    </div>
</div>