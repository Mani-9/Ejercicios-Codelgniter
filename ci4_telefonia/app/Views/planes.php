<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Planes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../../public/css/diseno.css">
  <link rel="stylesheet" href="../public/css/diseno.css">
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
            <a class="nav-link text-white" href="<?= base_url('ver_lineas_Telefonicas')?>"><i
                class="bi bi-telephone-forward-fill"></i> Lineas Telefonicas</a>
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

  <main class="container formulario p-2">
    <div class="d-flex justify-content-center ">
      <h1 class="p-2 col-12 col-md-6 col-lg-4 text-center">Planes telefónicos</h1>

    </div>
    <div class="d-flex justify-content-end ">
      <a href="<?php echo base_url('Nuevo_plan'); ?>" class="btn btn-dark col-12 col-md-6 col-lg-4 mt-2 m-2">
        <h4>Agregar nuevo plan</h4>
      </a>
    </div>
    <div class="table-responsive">
      <table class="table table-success table-striped border border-dark">
        <thead class="table-dark">
          <tr>
            <th>ID Plan: </th>
            <th>Nombre: </th>
            <th>Pago mensual: </th>
            <th>Cantidad de minutos: </th>
            <th>Cantidad de mensajes: </th>
            <th>Acciones: </th>
          </tr>
        </thead>
        <?php
            foreach($datos as $planes ):
        ?>
        <tbody>
          <tr>
            <td>
              <?php echo $planes['plan_id'] ?>
            </td>
            <td>
              <?php echo $planes['nombre'] ?>
            </td>
            <td>
              <?php echo $planes['pago_mensual'] ?>
            </td>
            <td>
              <?php echo $planes['cantidad_minutos'] ?>
            </td>
            <td>
              <?php echo $planes['cantidad_mensajes'] ?>
            </td>
            <td>
              <a href="<?= base_url('buscar_plan/').$planes['plan_id']?>" class="btn btn-info"><i
                  class="bi bi-pencil-square"></i> Editar </a>
              <a href="<?= base_url('eliminar_plan/').$planes['plan_id']?>" class="btn btn-danger"><i
                  class="bi bi-trash-fill"></i> Eliminar</a>
            </td>
          </tr>
        </tbody>
        <?php
        endforeach;
        ?>
      </table>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>