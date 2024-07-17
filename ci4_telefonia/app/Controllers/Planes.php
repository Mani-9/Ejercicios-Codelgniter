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
    public function nuevoPlan(): string
    {
        return view('planes_nuevos');
    }
    public function agregar_plan(): string
    {
        $id= $this->request->getVar('txtPlanId');
        $nombre= $this->request->getVar('txtNombre');
        $pago_mensual= $this->request->getVar('txtPagoMensual');
        $cantidad_minutos= $this->request->getVar('txtCantidadMinutos');
        $cantidad_mensajes= $this->request->getVar('txtCantidadMensajes');
        
        $planes = new PlanesModel();
        $datos=[
            'plan_id'=>$id,
            'nombre'=>$nombre,
            'pago_mensual'=>$pago_mensual,
            'cantidad_minutos'=>$cantidad_minutos,
            'cantidad_mensajes'=>$cantidad_mensajes
        ];
        $planes->insert($datos);
        echo "Plan agregado";
        echo "<a href='ver_planes'>Regresar</a>";
  
}
}

