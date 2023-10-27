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

    public function agregar(){
        

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) === 'get')) {
            return 
            view('common/header') .
            view('common/menu') .
            view('Adoptadores/agregar') .
            view('common/footer');
        }

        $rules = [
            'nombre' => 'required|max_length[30]',
            'apPaterno'=> 'required|max_length[50]',
            'apMaterno'=> 'required|min_length[5]',
            'edad'=> 'required|min_length[2]',
            'telefono'=> 'required|min_length[5]',
            'email'=> 'required|min_length[5]',
            'estado'=> 'required|min_length[5]',
            'ciudad'=> 'required|min_length[5]',
            'cp'=> 'required|min_length[5]',
            'calle'=> 'required'
        ];

        if (! $this->validate($rules)) {
            return 
            view('common/header') .
        view('common/menu') .
        view('Adoptadores/agregar',['validation' => $validation]) .
        view('common/footer');
        }else{
            if($this->insertar()){
                return redirect('adoptador/mostrar');
            }
        }
       
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

    public function delete($idAdoptador)
    {
        $adoptadorModel = model('AdoptadorModel');

        try {
            $adoptadorModel->delete($idAdoptador);
            return redirect('adoptador/mostrar');
        } catch (Exception $e) {
            // Mostrar mensaje en la vista
            $this->session->set_flashdata('error', $e->getMessage());
            return redirect('adoptador/mostrar');
        }
    }

    public function editar($idAdoptador)
    {
        $adoptadorModel = model('AdoptadorModel');
        $data['adoptador'] = $adoptadorModel->find($idAdoptador);
        
        return
            view('common/header') .
            view('common/menu') .
            view('Adoptadores/editar', $data) .
            view('common/footer');
    }

    public function update()
    {
        $adoptadorModel = model('AdoptadorModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apPaterno" => $_POST['apPaterno'],
            "apMaterno" => $_POST["apMaterno"],
            "edad" => $_POST['edad'],
            'telefono'=> $_POST['telefono'],
            'email'=> $_POST['email'],
            'estado'=> $_POST['estado'],
            'ciudad'=> $_POST['ciudad'],
            'cp'=> $_POST['cp'],
            'calle'=> $_POST['calle']
        ];
        $adoptadorModel->update($_POST['idAdoptador'], $data);
        return redirect('adoptador/mostrar');
    }

    public function insertar()
    {
        $adoptadorModel = model('AdoptadorModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apPaterno" => $_POST['apPaterno'],
            "apMaterno" => $_POST["apMaterno"],
            "edad" => $_POST['edad'],
            'telefono'=> $_POST['telefono'],
            'email'=> $_POST['email'],
            'estado'=> $_POST['estado'],
            'ciudad'=> $_POST['ciudad'],
            'cp'=> $_POST['cp'],
            'calle'=> $_POST['calle']
        ];
        $adoptadorModel->insert($data, false);
        return true;
    }
}

