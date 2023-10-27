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

    public function agregar(){
       

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) === 'get')) {
            return 
            view('common/header') .
            view('common/menu') .
            view('Dietas/agregar') .
            view('common/footer');
        }

        $rules = [
            'nombre'=> 'required|max_length[50]',
            'descripcion'=> 'required|min_length[5]',
            'alimentosExcluidos'=> 'required|min_length[5]',
            'tipo'=> 'required|min_length[5]',
            'proteinas'=> 'required|min_length[5]',
            'carbohidratos'=> 'required|min_length[5]',
            'grasas'=> 'required|min_length[5]'
        ];

        if (! $this->validate($rules)) {
            return 
            view('common/header') .
        view('common/menu') .
        view('Dietas/agregar',['validation' => $validation]) .
        view('common/footer');
        }else{
            if($this->insertar()){
                return redirect('dieta/mostrar');
            }
        }
       
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

    public function insertar()
    {
        $dietaModel = model('DietaModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST["descripcion"],
            "alimentosExcluidos" => $_POST['alimentosExcluidos'],
            'tipo' => $_POST['tipo'],
            'proteinas' => $_POST['proteinas'],
            'carbohidratos' => $_POST['carbohidratos'],
            'grasas' => $_POST['grasas']
        ];
        $dietaModel->insert($data, false);
        return true;
    }

    public function delete($idDieta)
    {
        $dietaModel = model('DietaModel');
        $dietaModel->delete($idDieta);
        return redirect('dieta/mostrar');
    }

    public function update()
    {
        $dietaModel = model('DietaModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST["descripcion"],
            "alimentosExcluidos" => $_POST['alimentosExcluidos'],
            'tipo' => $_POST['tipo'],
            'proteinas' => $_POST['proteinas'],
            'carbohidratos' => $_POST['carbohidratos'],
            'grasas' => $_POST['grasas']
        ];
        $dietaModel->update($_POST['idDieta'], $data);
        return redirect('dieta/mostrar');
    }

    public function editar($idDieta)
    {
        $dietaModel = model('DietaModel');
        $data['dieta'] = $dietaModel->find($idDieta);

        return
            view('common/header') .
            view('common/menu') .
            view('Dietas/editar', $data) .
            view('common/footer');
    }

}

