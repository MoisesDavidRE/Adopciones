<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdopcionesController extends BaseController
{
    public function mostrar()
    {

        $adopcionesModel = model('AdopcionesModel');
        $data['adopciones'] = $adopcionesModel->findAll();

        return 
        view("common/header").
        view("common/menu").
        view ("Adopciones/mostrar").
        view ("common/footer");
    }
}
