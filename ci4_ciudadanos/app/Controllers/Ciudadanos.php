<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\CiudadanosModel;

class Ciudadanos extends BaseController
{
    public function index(): string
    {
        /*$ciudadanos = new RegionesModel();
        print_r($ciudadanos->findall());
        return view('regiones')
        */      
        // creando un objeto de tipo RegionModel

        $ciudadanos = new CiudadanosModel();
        $datos['datos']=$ciudadanos->findAll();
        
        //finAll() = select * from regiones;
        return view('ciudadanos', $datos);
    }
}
