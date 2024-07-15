<?php

namespace App\Controllers;
//utilizar el modelo 
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    public function index(): string
    {
       
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->findAll();
        
       
        return view('clientes', $datos);
    }
}
