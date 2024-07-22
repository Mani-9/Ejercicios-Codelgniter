<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lineas_Telefonicas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/diseno.css">
</head>

<body>
<div class="container">
    <ul class="nav justify-content-center p-4 fs-3">
    <li class="nav-item nav-mod">
        <a class="nav-link navmod" href="ver_menu">Menu Principal</a>
      </li>
      <li class="nav-item customli">
        <a class="nav-link" href="ver_clientes">Clientes</a>
      </li>
      <li class="nav-item customli">
        <a class="nav-link" href="ver_planes">Planes</a>
      </li>
      
      <li class="nav-item customli">
        <a class="nav-link " href="agregar_linea_telefonica">Agregar Lineas Telefonicas</a>
      </li>
    </ul>
  </div>
  <div class="container border border-5 formulario">
    <h1 class="d-flex justify-content-center p-4">Lineas Telefonicas</h1>
    <table class="table table-border table-striped ">
      <thead>
        <tr>
          <th>Numero de telefono: </th>
          <th>Fecha de pago: </th>
          <th>Meses atrasados:</th>
          <th>Id plan: </th>
          <th>Id cliente: </th>
          <th>Acciones: </th>
        </tr>
      </thead>
      <?php
            foreach($datos as $lineas_telefonicas ):
        ?>
      <tbody>
        <tr>
          <td>
            <?php echo $lineas_telefonicas['no_telefono'] ?>
          </td>
          <td>
            <?php echo $lineas_telefonicas['fecha_pago'] ?>
          </td>
          <td>
            <?php echo $lineas_telefonicas['meses_atraso'] ?>
          </td>
          <td>
            <?php echo $lineas_telefonicas['plan_id'] ?>
          </td>
          <td>
            <?php echo $lineas_telefonicas['cliente_id'] ?>
          </td>
          <td>
            <a href="" class="btn btn-info">Actualizar</a>
             <a href="eliminar_linea_telefonica/<?php echo $lineas_telefonicas['no_telefono']; ?>" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
      </tbody>
      <?php 
        endforeach;
        ?>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>