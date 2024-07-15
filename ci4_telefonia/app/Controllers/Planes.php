<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\PlanesModel;

class Planes extends BaseController
{
    public function index(): string
    {
       
        $planes = new PlanesModel();
        $datos['datos']=$planes->findAll();
        
       
        return view('planes', $datos);
    }
}
