<?php

namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->findAll();
        return view('clientes', $datos);
    }

    public function agregarCliente()
    {
        $datos = [
            'cliente_id' => $this->request->getVar('txtId'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correo_electronico' => $this->request->getVar('txtCorreoElectronico'),
            'calle_avenida' => $this->request->getVar('txtCalleAvenida'),
            'no_casa' => $this->request->getVar('txtNumeroCasa'),
            'zona' => $this->request->getVar('txtZona')
        ];
        $clientes = new ClientesModel();
        $clientes->insert($datos);
        return redirect()->route('ver_clientes');
    }

    public function nuevoCliente(): string
    {
        return view('clientes_nuevos');
    }
    public function eliminarCliente($id=null)
    {
        //echo $id;
        $clientes = new ClientesModel();
        $clientes->delete(['cliente_id'=>$id]);
        return redirect()->route('ver_clientes');   
    }
    public function buscarCliente($id=null)
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->where('cliente_id', $id)->first();
        return view('formModificarCliente', $datos);
    }
    public function modificarCliente()
    {
        $datos = [
            'cliente_id' => $this->request->getVar('txtId'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correo_electronico' => $this->request->getVar('txtCorreoElectronico'),
            'calle_avenida' => $this->request->getVar('txtCalleAvenida'),
            'no_casa' => $this->request->getVar('txtNumeroCasa'),
            'zona' => $this->request->getVar('txtZona')
        ];
        $clientes = new ClientesModel();
        $clientes->update($datos['cliente_id'], $datos);
        return redirect()->route('ver_clientes');
    }
}
