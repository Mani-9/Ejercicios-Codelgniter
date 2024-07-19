<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\MunicipiosModel;

class MunicipiosController extends BaseController
{
    public function index(): string
    {
        
        $municipios = new MunicipiosModel();
        $datos['datos']=$municipios->findAll();
        return view('municipios', $datos);
    }
    public function agregarMunicipio()
    {
        $datos = [
          'cod_muni'=> $this->request->getVAR('numMunicipio'),
          'nombre_municipio'=> $this->request->getVAR('nombreMuncicipio'), 
          'cod_depto'=> $this->request->getVAR('numDepartamento')
        ];
        $municipios = new MunicipiosModel();
        $municipios->insert($datos);
        return redirect()->route('ver_municipios');
    }
    public function nuevosMunicipios():string{
        return view('agregarMunicipio');
    }
}
