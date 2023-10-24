<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MascotaController extends BaseController
{
    public function mostrar()
    {
        $mascotasModel = model('MascotaModel');
        $data['mascotas'] = $mascotasModel->findAll();       
    return 
        view ("common/header").
        view ("common/menu").
        view ("Mascotas/mostrar",$data).
        view ("common/footer");
    }

    public function editar($idMascota)
    {
        $mascotaModel = model('MascotaModel');
        $razaModel = model('RazaModel');
        $data['mascota'] = $mascotaModel->find($idMascota);

        return
            view('common/header') .
            view('common/menu') .
            view('Mascotas/editar', $data) .
            view('common/footer');
    }


    public function agregar()
    {
        return
            view('common/header') .
            view('common/menu') .
            view('Mascotas/agregar') .
            view('common/footer');
    }

    public function delete($idMascota)
    {
        $mascotaModel = model('MascotaModel');
        $mascotaModel->delete($idMascota);
        return redirect('mascota/mostrar');
    }

    public function buscar()
    {
        $mascotaModel = model('MascotaModel');
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $sexo = $_GET['sexo'];
            $data['mascotas'] = $mascotaModel->like('nombre', $nombre)->like('sexo',$sexo)->findAll();
        } else {
            $nombre = "";
            $data['mascotas'] = $mascotaModel->findAll();
        }

        return
            view ('common/header') .
            view ('common/menu') .
            view ('Mascotas/buscar', $data) .
            view ('common/footer');
    }
}


