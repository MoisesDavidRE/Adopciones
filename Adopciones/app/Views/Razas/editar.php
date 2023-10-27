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
                    <h2 class="mb-5">AGREGAR RAZA</h2>
                </div>
            </div>
        </div>

            <form action="<?= base_url('/raza/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name ="idRaza" value="<?= $raza->idRaza ?>" />
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de la raza</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $raza->nombre?>">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción de la raza</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?=$raza->descripcion ?>">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-1"></div>
    </div>
</div>