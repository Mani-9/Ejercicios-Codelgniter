<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/css/clientes.css">
  <link rel="stylesheet" href="../../public/css/clientes.css">
</head>

<body>
  <div class="container ">
    <ul class="nav justify-content-center p-4 fs-3 modcontainer">
      <li class="nav-item nav-mod">
        <a class="nav-link navmod" href="ver_menu">Menu Principal</a>
      </li>
      <li class="nav-item nav-mod">
        <a class="nav-link navmod" href="ver_planes">Planes</a>
      </li>
      <li class="nav-item nav-mod">
        <a class="nav-link navmod" href="ver_lineas_Telefonicas">Lineas Telefonicas</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link navmod" href="agregar_cliente">Agregar Cliente</a>
      </li>
    </ul>
  </div>
  <div class="container p-4">
     <div class="row justify-content-center">
       <h2 class="d-flex justify-content-center p-2 modcontainer col-4">Clientes</h2>
     </div>
    <table class="table table-success table-striped border border-dark">
      <thead class="table-dark">
        <tr>
          <th>ID Cliente: </th>
          <th>Nombre Completo: </th>
          <th>Correo electronico: </th>
          <th>Direccion: </th>
          <th>Acciones: </th>
        </tr>
      </thead>
      <?php
            foreach($datos as $clientes ):
        ?>
      <tbody>
        <tr>
          <td>
            <?php echo $clientes['cliente_id'] ?>
          </td>
          <td>
            <?php echo $clientes['nombre'] ." " .$clientes['apellido']?>
          </td>
          <td>
            <?php echo $clientes['correo_electronico'] ?>
          </td>
          <td>
            <?php echo $clientes['calle_avenida']. " "
            .$clientes['no_casa'] . " zona "
            .$clientes['zona']
            ?>
          </td>
          <td>
            <a href="" class="btn btn-info">Actualizar</a>
            <a href="eliminar_cliente/<?php echo $clientes['cliente_id']?>" class="btn btn-danger">Eliminar</a>
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