<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdoptadorController extends BaseController
{
    public function mostrar()
    {
        $adoptadorModel = model('AdoptadorModel');
        $data['adoptadores'] = $adoptadorModel->findAll();       
    return 
        view ("common/header").
        view ("common/menu").
        view ("Adoptadores/mostrar",$data).
        view ("common/footer");   
    }

    public function agregar()
    {
        return
            view('common/header') .
            view('common/menu') .
            view('Adoptadores/agregar') .
            view('common/footer');
    }

    public function buscar()
    {
        $adoptadorModel = model('AdoptadorModel');
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $edad = $_GET['edad'];
            $data['adoptadores'] = $adoptadorModel->like('nombre', $nombre)->like('edad',$edad)->findAll();
        } else {
            $nombre = "";
            $data['adoptadores'] = $adoptadorModel->findAll();
        }

        return
            view ('common/header') .
            view ('common/menu') .
            view ('Adoptadores/buscar', $data) .
            view ('common/footer');
    }
}

