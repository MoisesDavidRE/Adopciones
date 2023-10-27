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

    public function insertar()
    {
        $razaModel = model('RazaModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion']
        ];
        $razaModel->insert($data, false);
        return redirect('raza/mostrar');
    }

    public function editar($idRaza)
    {
        $razaModel = model('RazaModel');
        $data['raza'] = $razaModel->find($idRaza);
        return
            view('common/header') .
            view('common/menu') .
            view('Razas/editar', $data) .
            view('common/footer');
    }

    public function update()
    {
        $razaModel = model('RazaModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion']
        ];
        $razaModel->update($_POST['idRaza'], $data);
        return redirect('raza/mostrar');
    }
    
    public function delete($idRaza)
    {
        $razaModel = model('RazaModel');
        $razaModel->delete($idRaza);
        return redirect('raza/mostrar');
    }
}

