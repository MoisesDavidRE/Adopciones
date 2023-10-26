<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MascotaController extends BaseController
{
    public function mostrar()
    {
        $dietaModel = model("DietaModel");
        $razaModel = model("RazaModel");
        $mascotasModel = model('MascotaModel');
        $data['mascotas'] = $mascotasModel->findAll();
        $data['dietas'] = $dietaModel->findAll();
        $data['razas'] = $razaModel->findAll();
        return
            view("common/header") .
            view("common/menu") .
            view("Mascotas/mostrar", $data) .
            view("common/footer");
    }

    public function editar($idMascota)
    {
        $mascotaModel = model('MascotaModel');
        $razaModel = model('RazaModel');
        $dietaModel = model('DietaModel');
        $data['mascota'] = $mascotaModel->find($idMascota);
        $data['dietas'] = $dietaModel->findAll();
        $data['razas'] = $razaModel->findAll();

        return
            view('common/header') .
            view('common/menu') .
            view('Mascotas/editar', $data) .
            view('common/footer');
    }


    public function agregar()
    {
        $dietaModel = model('DietaModel');
        $razaModel = model('RazaModel');
        $data['dietas'] = $dietaModel->findAll();
        $data['razas'] = $razaModel->findAll();
        return
            view('common/header') .
            view('common/menu') .
            view('Mascotas/agregar', $data) .
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
        $razaModel = model('RazaModel');
        $dietaModel = model('DietaModel');

        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $animal = $_GET['animal'];
            $sexo = $_GET['sexo'];
            $edad = $_GET['edad'];
            $color = $_GET['color'];
            $tamanio = $_GET['tamanio'];
            $peso = $_GET['peso'];
            $idRaza = $_GET['idRaza'];
            $idDieta = $_GET['idDieta'];
            
            $data['mascotas'] = $mascotaModel
                ->like('nombre', $nombre)
                ->like('sexo', $sexo)
                ->like('animal', $animal)
                ->like('edad', $edad)
                ->like('color', $color)
                ->like('tamanio', $tamanio)
                ->like('peso', $peso)
                ->findAll();
                $data['razas'] = $razaModel->like('idRaza',$idRaza)->findAll();
                $data['dietas'] = $dietaModel->like('idDieta', $idDieta)->findAll();
        } else {
            $nombre = "";
            $data['mascotas'] = $mascotaModel->findAll();
            $data['razas'] = $razaModel->findAll();
            $data['dietas'] = $dietaModel->findAll();
        }

        return
            view('common/header') .
            view('common/menu') .
            view('Mascotas/buscar', $data) .
            view('common/footer');
    }

    public function insertar()
    {
        $mascotaModel = model('MascotaModel');
        $data = [
            "animal" => $_POST['animal'],
            "nombre" => $_POST['nombre'],
            "edad" => $_POST["edad"],
            "sexo" => $_POST['sexo'],
            'color' => $_POST['color'],
            'tamanio' => $_POST['tamanio'],
            'peso' => $_POST['peso'],
            'idRaza' => $_POST['idRaza'],
            'idDieta' => $_POST['idDieta']
        ];
        $mascotaModel->insert($data, false);
        return redirect('mascota/mostrar');
    }



    public function update()
    {
        $mascotaModel = model('MascotaModel');
        $data = [
            "animal" => $_POST['animal'],
            "nombre" => $_POST['nombre'],
            "edad" => $_POST["edad"],
            "sexo" => $_POST['sexo'],
            'color' => $_POST['color'],
            'tamanio' => $_POST['tamanio'],
            'peso' => $_POST['peso'],
            'idRaza' => $_POST['idRaza'],
            'idDieta' => $_POST['idDieta']
        ];
        $mascotaModel->update($_POST['idMascota'], $data);
        return redirect('mascota/mostrar');
    }
}


