<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 class="d-flex justify-content-center p-4">Clientes</h1>
    <table class="table table-border table-striped ">
      <thead>
        <tr>
          <th>ID Cliente: </th>
          <th>Apellido: </th>
          <th>Nombre:</th>
          <th>Correo electronico: </th>
          <th>Calle y avenida: </th>
          <th>Numero de casa:</th>
          <th>Zona:</th>
        </tr>
      </thead>
      <?php
            foreach($datos as $ciudadanos ):
        ?>
      <tbody>
        <tr>
          <td>
            <?php echo $ciudadanos['cliente_id'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['apellido'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['nombre'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['correo_electronico'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['calle_avenida'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['no_casa'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['zona'] ?>
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