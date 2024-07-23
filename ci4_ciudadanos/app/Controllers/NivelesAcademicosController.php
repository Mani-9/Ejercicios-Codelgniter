<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\NivelesAcademicosModel;

class NivelesAcademicosController extends BaseController
{
    public function index(): string
    {
        
        $nivelesAcademicos = new NivelesAcademicosModel();
        $datos['datos']=$nivelesAcademicos->findAll();
        return view('nivelesAcademicos', $datos);
    }
    
    public function agregarNivelAcademico(){
        $datos = [
            'cod_nivel_acad'=> $this->request->getVAR('numCodigoNivelAcademico'),
            'nombre'=> $this->request->getVAR('nombreNivelAcademico'),
            'descripcion'=> $this->request->getVAR('descripcionNivelAcademico')
        ];
        $nivelesAcademicos = new NivelesAcademicosModel();
        $nivelesAcademicos->insert($datos);
        return redirect()->route('ver_nivelesacademicos');
    }

    public function nuevoNivelAcademico(): string{
        return view('agregarNivelesAcademicos');
    }
    public funtion eliminarNivelAcademico($id=null):string{
        $nivelesAcademicos = new NivelesAcademicosModel();
        $nivelesAcademicos->delete(['cod_nivel_acad'=>$id]) 
        return redirect()->route('ver_nivelesacademicos'); 
    }
   
}
