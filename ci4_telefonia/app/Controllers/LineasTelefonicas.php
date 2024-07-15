<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\LineasTelefonicasModel;

class LineasTelefonicas extends BaseController
{
    public function index(): string
    {
       
        $lineas_Telefonicas = new LineasTelefonicasModel();
        $datos['datos']=$lineas_Telefonicas->findAll();
        
       
        return view('lineas_telefonicas', $datos);
    }
}
