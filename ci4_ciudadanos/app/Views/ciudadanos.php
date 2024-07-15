<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ciudadanos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 class="d-flex justify-content-center p-4">Ciudadanos</h1>
    <table class="table table-border table-striped ">
      <thead>
        <tr>
          <th>DPI:</th>
          <th>Apellido:</th>
          <th>Nombre:</th>
          <th>Direccion:</th>
          <th>Telefono Casa:</th>
          <th>Telefono movil:</th>
          <th>Email:</th>
          <th>Fecha nacimiento:</th>
          <th>Codigo nivel academico:</th>
          <th>Codigo municipio:</th>
          <th>contra:</th>
        </tr>
      </thead>
      <?php
            foreach($datos as $ciudadanos ):
        ?>
      <tbody>
        <tr>
          <td>
            <?php echo $ciudadanos['dpi'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['apellido'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['nombre'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['direccion'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['tel_casa'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['tel_movil'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['email'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['fechanac'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['cod_nivel_acad'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['cod_muni'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['contra'] ?>
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