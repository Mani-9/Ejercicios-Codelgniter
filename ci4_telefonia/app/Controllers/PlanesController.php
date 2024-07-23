<?php

namespace App\Controllers;

use App\Models\PlanesModel;

class PlanesController extends BaseController
{
    public function index(): string
    {
        $planes = new PlanesModel();
        $datos['datos'] = $planes->findAll();
        return view('planes', $datos);
    }

    public function nuevoPlan(): string
    {
        return view('planes_nuevos');
    }

    public function agregar_plan()
    {
        $id = $this->request->getVar('txtPlanId');
        $nombre = $this->request->getVar('txtNombre');
        $pago_mensual = $this->request->getVar('txtPagoMensual');
        $cantidad_minutos = $this->request->getVar('txtCantidadMinutos');
        $cantidad_mensajes = $this->request->getVar('txtCantidadMensajes');
        
        $planes = new PlanesModel();

        $datos = [
            'plan_id' => $this->request->getVar('txtPlanId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'pago_mensual' => $this->request->getVar('txtPagoMensual'),
            'cantidad_minutos' => $this->request->getVar('txtCantidadMinutos'),
            'cantidad_mensajes' => $this->request->getVar('txtCantidadMensajes')
        ];

        $planes->insert($datos);
        echo "Datos guardados";
        return redirect()->route('ver_planes');
    }
    public function eliminarPlan($id=null){
        $planes = new PlanesModel();
        $planes->delete(['plan_id'=>$id]);
        return redirect()->route('ver_planes');
    }
}

