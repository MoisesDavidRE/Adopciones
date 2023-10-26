<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RazaController extends BaseController
{
    public function mostrar()
    {
        $razaModel = model('RazaModel');
        $data['razas'] = $razaModel->findAll();
        return
            view("common/header") .
            view("common/menu") .
            view("Razas/mostrar", $data) .
            view("common/footer");
    }

    public function agregar()
    {
        return
            view('common/header') .
            view('common/menu') .
            view('Razas/agregar') .
            view('common/footer');
    }

    public function buscar()
    {
        $razaModel = model('RazaModel');
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $descripcion = $_GET['descripcion'];
            $data['razas'] = $razaModel->like('nombre', $nombre)->like('descripcion',$descripcion)->findAll();
        } else {
            $nombre = "";
            $data['razas'] = $razaModel->findAll();
        }

        return
            view ('common/header') .
            view ('common/menu') .
            view ('Razas/buscar', $data) .
            view ('common/footer');
    }

    
}

