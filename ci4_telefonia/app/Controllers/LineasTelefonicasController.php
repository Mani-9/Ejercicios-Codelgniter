<?php

namespace App\Controllers;

use App\Models\LineasTelefonicasModel;

class LineasTelefonicasController extends BaseController
{
    public function index(): string
    {
        $lineas_Telefonicas = new LineasTelefonicasModel();
        $datos['datos'] = $lineas_Telefonicas->findAll();
        return view('lineas_telefonicas', $datos);
    }

    public function agregarLineaTelefonica()
    {
        $datos = [
            'no_telefono' => $this->request->getVar('txtNumeroTelefono'),
            'fecha_pago' => $this->request->getVar('txtFechaPago'),
            'meses_atraso' => $this->request->getVar('txtMesesAtrasados'),
            'plan_id' => $this->request->getVar('txtIdPlan'),
            'cliente_id' => $this->request->getVar('txtIdCliente')
        ];
        print_r($datos);
        $lineas_Telefonicas = new LineasTelefonicasModel();
        $lineas_Telefonicas->insert($datos);
        return redirect()->route('ver_lineas_Telefonicas'); 
    }

    public function nuevaLineaTelefonica(): string
    {
        return view('lineaTelefonicaNueva');  
    }
    public function eliminarLineaTelefonica($id=null){
     
        $lineas_Telefonicas = new LineasTelefonicasModel();
        $lineas_Telefonicas->delete(['no_telefono'=>$id]);
        return redirect()->route('ver_lineas_Telefonicas');
    }
    public function buscarLineaTelefonica($id=null)
    {
        $lineas_Telefonicas = new LineasTelefonicasModel();
        $datos['datos'] = $lineas_Telefonicas->where('no_telefono', $id)->first();
        return view('formModificarLineasTelefonicas', $datos);
    }
    public function modificarLineaTelefonica()
    {
        $datos = [
            'no_telefono' => $this->request->getVar('txtNumeroTelefono'),
            'fecha_pago' => $this->request->getVar('txtFechaPago'),
            'meses_atraso' => $this->request->getVar('txtMesesAtrasados'),
            'plan_id' => $this->request->getVar('txtIdPlan'),
            'cliente_id' => $this->request->getVar('txtIdCliente')
        ];
        $lineas_Telefonicas = new LineasTelefonicasModel();
        $lineas_Telefonicas->update($datos['no_telefono'], $datos);
        return redirect()->route('ver_lineas_Telefonicas');
    }  
}

