<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\RegionesModel;

class RegionesController extends BaseController
{
    public function index(): string
    {
     
        $region = new RegionesModel();
        $datos['datos']=$region->findAll();
        return view('regiones', $datos);
    }
    public function agregarRegion()
    {
        $datos = [
            'cod_region'=> $this->request->getVAR('numCodigoRegion'),
            'nombre'=> $this->request->getVAR('nombreRegion'),
            'descripcion'=>$this->request->getVAR('descripcionRegion'),
        ];
        $region = new RegionesModel();
        $region->insert($datos);
        return redirect()->route('ver_regiones');
    }
    public function nuevaRegion(): string{
        return view('agregarRegiones');
    }
    public function eliminarRegion($cod_region = null):string{
        $region =new RegionesModel();
        $regiones->delete(['cod_region'=>$cod_region]);
        return redirect()->route('ver_regiones');
    } 
}
