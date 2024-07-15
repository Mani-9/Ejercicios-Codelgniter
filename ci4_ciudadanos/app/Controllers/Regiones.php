<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\RegionesModel;

class Regiones extends BaseController
{
    public function index(): string
    {
        /*$region = new RegionesModel();
        print_r($region->findall());
        return view('regiones')
        */      
        // creando un objeto de tipo RegionModel

        $region = new RegionesModel();
        $datos['datos']=$region->findAll();
        
        //finAll() = select * from regiones;
        return view('regiones', $datos);
    }
}
