<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\DepartamentosModel;

class Departamentos extends BaseController
{
    public function index(): string
    {
        
        $departamentos = new DepartamentosModel();
        $datos['datos']=$departamentos->findAll();
        return view('departamentos', $datos);
    }
}
