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
        $adoptadorModel = model("AdoptadorModel");
        $mascotasModel = model("MascotaModel");
        $data["adoptadores"] = $adoptadorModel->findAll();
        $data["mascotas"] = $mascotasModel->findAll();
        
        return
            view('common/header') .
            view('common/menu') .
            view('Adopciones/agregar',$data) .
            view('common/footer');
    }

    public function buscar()
    {
        $adopcionModel = model('AdopcionesModel');
        $mascotaModel = model('MascotaModel');
        $adoptadorModel =model('AdoptadorModel');

        if (isset($_GET['idAdoptador'])) {
            $idAdoptador = $_GET['idAdoptador'];
            $idMascota = $_GET['idMascota'];
            $data['adopciones'] = $adopcionModel->like('idAdoptador', $idAdoptador)->like('idMascota',$idMascota)->findAll();
            $data['mascotas'] = $mascotaModel->findAll();
            $data['adoptadores'] = $adoptadorModel->findAll();
        } else {
            $estatus = "";
            $data['adopciones'] = $adopcionModel->findAll();
            $data['adoptadores'] = $adoptadorModel->findAll();
            $data['mascotas'] = $mascotaModel->findAll();
        }

        return
            view ('common/header') .
            view ('common/menu') .
            view ('Adopciones/buscar', $data) .
            view ('common/footer');
    }
    
    public function insertar()
    {
        $adopcionModel = model('AdopcionesModel');
        $data = [
            "idMascota" => $_POST['idMascota'],
            "idAdoptador" => $_POST['idAdoptador'],
            "fechaAdopcion" => $_POST["fechaAdopcion"],
            "estatus" => $_POST['estatus']
        ];
        $adopcionModel->insert($data, false);
        return redirect('adopcion/mostrar');
    }

    public function delete($idAdopcion)
    {
        $adopcionModel = model('AdopcionesModel');
        $adopcionModel->delete($idAdopcion);
        return redirect('adopcion/mostrar');
    }

    public function update()
    {
        $adopcionModel = model('AdopcionesModel');
        $data = [
            "idAdoptador" => $_POST['idAdoptador'],
            "idMascota" => $_POST['idMascota'],
            "fechaAdopcion" => $_POST["fechaAdopcion"],
            "estatus" => $_POST['estatus']
        ];
        $adopcionModel->update($_POST['idAdopcion'], $data);
        return redirect('adopcion/mostrar');
    }

    public function editar($idAdopcion)
    {
        $adopcionModel = model('AdopcionesModel');
        $mascotaModel = model('MascotaModel');
        $adoptadorModel = model('AdoptadorModel');
        $data['adopcion'] = $adopcionModel->find($idAdopcion);
        $data['mascotas'] = $mascotaModel->findAll();
        $data['adoptadores'] = $adoptadorModel->findAll();
        
        return
            view('common/header') .
            view('common/menu') .
            view('Adopciones/editar', $data) .
            view('common/footer');
    }
}
