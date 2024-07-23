<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\DepartamentosModel;

class DepartamentosController extends BaseController
{
    public function index(): string
    {
        
        $departamentos = new DepartamentosModel();
        $datos['datos']=$departamentos->findAll();
        return view('departamentos', $datos);
    }
    public function agregarDepartamentos(){
        $datos = [
            'cod_depto'=> $this->request->getVAR('codDepartamento'),
            'nombre_depto'=> $this->request->getVAR('nombreDepartamento'),
            'cod_region'=> $this->request->getVar('codRegion')
        ];
        $departamentos = new DepartamentosModel();
        $departamentos->insert($datos);
        return redirect()->route('ver_departamentos'); 
    }
    public function nuevosDepartamentos():string{
        return view('agregarDepartamentos');
    }
    public function eliminarDepartamento($id=null):string{
        $departamentos = new DepartamentosModel();
        $departamentos->delete(['code_depto'=>$id]);
        return redirect()->route('ver_departamentos'); 
    }
}

