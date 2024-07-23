<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lineas_Telefonicas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="<?= base_url('css/diseno.css')?>">
</head>

<body>
<header>
    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
      <div class="bg-dark p-4">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('ver_menu')?>"><i class="bi bi-menu-app-fill"></i>
              Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('ver_clientes')?>"><i class="bi bi-person-vcard"></i>
              Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('ver_planes')?>"><i class="bi bi-pip"></i> Planes</a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center w-100">
          <p class="mb-0 text-white"><i class="bi bi-database"></i> Base de datos telefonía</p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </nav>
  </header>
  <div class="container border border-5 ">
    <div class="row justify-content-center">
     <h2 class="d-flex justify-content-center p-2  col-12 col-md-6 col-lg-4">Lineas Telefonicas</h2>
    </div>
    <div class="table-responsive">
      <table class="table table-success table-striped border border-dark">
        <thead class="table-dark">
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
            <a href="eliminar_linea_telefonica/<?php echo $lineas_telefonicas['no_telefono']; ?>"
              class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
      </tbody>
      <?php 
        endforeach;
        ?>
    </table>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>