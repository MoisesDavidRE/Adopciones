<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InicioController extends BaseController
{
    public function index()
    {
        return
            view("common/header") .
            view("common/menu") .
            view("Inicio/Inicio") .
            view("common/footer");
    }
}

