<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\NivelesAcademicosModel;

class NivelesAcademicos extends BaseController
{
    public function index(): string
    {
        
        $nivelesAcademicos = new NivelesAcademicosModel();
        $datos['datos']=$nivelesAcademicos->findAll();
        return view('nivelesAcademicos', $datos);
    }
}
