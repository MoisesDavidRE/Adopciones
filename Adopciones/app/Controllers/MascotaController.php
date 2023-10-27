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

        $validation =  \Config\Services::validation();

        if ((strtolower($this->request->getMethod()) === 'get')) {
            return 
            view('common/header',$data) .
            view('common/menu') .
            view('Mascotas/editar',$data) .
            view('common/footer');
        }
        
        $rules = [
            'animal' => 'required|max_length[30]',
            'nombre'=> 'required|min_length[1]',
            'sexo'=> 'required|min_length[1]',
            'edad'=> 'required|min_length[1]',
            'color'=> 'required|min_length[1]',
            'tamanio'=> 'required|min_length[1]',
            'peso'=> 'required|min_length[1]',
            'idRaza'=> 'required|min_length[1]',
            'idDieta'=> 'required|min_length[1]'
        ];

        if (! $this->validate($rules)) {
            return 
            view('common/header',$data) .
        view('common/menu') .
        view('Mascotas/editar',['validation' => $validation],$data) .
        view('common/footer');
        }else{
            if($this->update()){
                return redirect('mascota/mostrar');
            }
        }
    }


    public function agregar(){
        $dietaModel = model('DietaModel');
        $razaModel = model('RazaModel');

        $data['dietas'] = $dietaModel->findAll();
        $data['razas'] = $razaModel->findAll();


        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) === 'get')) {
            return 
            view('common/header',$data) .
            view('common/menu') .
            view('Mascotas/agregar',$data) .
            view('common/footer');
        }

        $rules = [
            'animal' => 'required|max_length[30]',
            'nombre'=> 'required|max_length[50]',
            'sexo'=> 'required|min_length[5]',
            'edad'=> 'required|min_length[5]',
            'color'=> 'required|min_length[5]',
            'tamanio'=> 'required|min_length[5]',
            'peso'=> 'required|min_length[5]',
            'idRaza'=> 'required|min_length[5]',
            'idDieta'=> 'required|min_length[5]'
        ];

        if (! $this->validate($rules)) {
            return 
            view('common/header',$data) .
        view('common/menu') .
        view('Mascotas/agregar',['validation' => $validation],$data) .
        view('common/footer');
        }else{
            if($this->insertar()){
                return redirect('mascota/mostrar');
            }
        }
       
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
        return true;
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
        return true;
    }
}


