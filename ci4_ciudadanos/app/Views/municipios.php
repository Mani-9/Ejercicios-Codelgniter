<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Municipios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 class="d-flex justify-content-center p-4">Municipios</h1>
    <table class="table table-border table-striped ">
      <thead>
        <tr>
          <th>Código municipio:</th>
          <th>Nombre municipio:</th>
          <th>Código departamento:</th>
        </tr>
      </thead>
      <?php
            foreach($datos as $departamentos ):
        ?>
      <tbody>
        <tr>
          <td>
            <?php echo $departamentos['cod_muni'] ?>
          </td>
          <td>
            <?php echo $departamentos['nombre_municipio'] ?>
          </td>
          <td>
            <?php echo $departamentos['cod_depto'] ?>
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