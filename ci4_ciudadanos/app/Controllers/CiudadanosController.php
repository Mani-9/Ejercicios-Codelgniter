<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\CiudadanosModel;

class CiudadanosController extends BaseController
{
    public function index(): string
    {
        $ciudadanos = new CiudadanosModel();
        $datos['datos']=$ciudadanos->findAll();
        return view('ciudadanos', $datos);
    }
    public function agregarCiudadano()
    {
        $datos = [
            'dpi'=>$this->request->getVAR('numDpi'),
            'apellido'=> $this->request->getVar('apellidoCiudadano'),
            'nombre'=> $this->request->getVar('nombreCiudadano'),
            'direcccion'=> $this->request->getVAR('numDireccion'),
            'tel_casa'=> $this->request->getVAR('numTelefonoCasa'),
            'tel_movil'=> $this->request->getVAR('numTelefonoMovil'),
            'email'=> $this->request->getVAR('txtEmail'),
            'fehcanac'=> $this->request->getVAR('numFechaNacimiento'),
            'cod_nivel_acad'=> $this->request->getVAR('codNivelAcademico'),
            'cod_muni'=> $this->request->getVAR('codMunicipio'),
            'contra'=> $this->request->getVAR('codContraseña')
        ];
        $ciudadanos = new CiudadanosModel();
        $ciudadanos->insert($datos);
        return redirect()->route('ver_ciudadanos');
    }
    public function nuevosCiudadanos():string{
        return view('agregarCiudadanos');
    }
}
