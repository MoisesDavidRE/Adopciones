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
}

