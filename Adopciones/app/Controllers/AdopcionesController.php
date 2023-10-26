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
        view ("Adopciones/mostrar",$data).
        view ("common/footer");
    }

    public function agregar()
    {
        return
            view('common/header') .
            view('common/menu') .
            view('Adopciones/agregar') .
            view('common/footer');
    }

    public function buscar()
    {
        $adopcionModel = model('AdopcionesModel');
        if (isset($_GET['estatus'])) {
            $estatus = $_GET['estatus'];
            $mascota = $_GET['mascota'];
            $data['adopciones'] = $adopcionModel->like('estatus', $estatus)->like('mascota',$mascota)->findAll();
        } else {
            $estatus = "";
            $data['adopciones'] = $adopcionModel->findAll();
        }

        return
            view ('common/header') .
            view ('common/menu') .
            view ('Adopciones/buscar', $data) .
            view ('common/footer');
    }
}
