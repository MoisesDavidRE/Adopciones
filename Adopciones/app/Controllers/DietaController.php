<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DietaController extends BaseController
{
    public function mostrar()
    {
        $dietaModel = model('DietaModel');
        $data['dietas'] = $dietaModel->findAll();       
    return 
        view ("common/header").
        view ("common/menu").
        view ("Dietas/mostrar",$data).
        view ("common/footer");   
    }

    public function agregar()
    {
        return
            view('common/header') .
            view('common/menu') .
            view('Dietas/agregar') .
            view('common/footer');
    }

    public function buscar()
    {
        $dietaModel = model('DietaModel');
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $tipo = $_GET['Tipo'];
            $data['adoptadores'] = $dietaModel->like('nombre', $nombre)->like('tipo',$tipo)->findAll();
        } else {
            $nombre = "";
            $data['dietas'] = $dietaModel->findAll();
        }

        return
            view ('common/header') .
            view ('common/menu') .
            view ('Dietas/buscar', $data) .
            view ('common/footer');
    }
}

