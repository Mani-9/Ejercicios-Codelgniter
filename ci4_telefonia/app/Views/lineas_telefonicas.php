<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lineas_Telefonicas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 class="d-flex justify-content-center p-4">Lineas Telefonicas</h1>
    <table class="table table-border table-striped ">
      <thead>
        <tr>
          <th>Numero de telefono: </th>
          <th>Fecha de pago: </th>
          <th>Meses atrasados:</th>
          <th>Id plan: </th>
          <th>Id cliente: </th>
        </tr>
      </thead>
      <?php
            foreach($datos as $ciudadanos ):
        ?>
      <tbody>
        <tr>
          <td>
            <?php echo $ciudadanos['no_telefono'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['fecha_pago'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['meses_atraso'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['plan_id'] ?>
          </td>
          <td>
            <?php echo $ciudadanos['cliente_id'] ?>
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