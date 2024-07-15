<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Niveles Academicos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../../public/css/nivelesacademicos.css">
</head>

<body>
  <div class="container">
    <h1 class="d-flex justify-content-center p-4 " >Niveles Academicos</h1>
    <table class="table table-border table-striped ">
      <thead>
        <tr>
          <th>Código Nivel Academico:</th>
          <th>Nombre Nivel Academico:</th>
          <th>Descripcion:</th>
        </tr>
      </thead>
      <?php
            foreach($datos as $nivelesacademicos ):
        ?>
      <tbody>
        <tr>
          <td>
            <?php echo $nivelesacademicos['cod_nivel_acad'] ?>
          </td>
          <td>
            <?php echo $nivelesacademicos['nombre'] ?>
          </td>
          <td>
            <?php echo $nivelesacademicos['descripcion'] ?>
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