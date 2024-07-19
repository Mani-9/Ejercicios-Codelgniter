<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Regiones</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

<body>
<div class="container">
    <ul class="nav justify-content-center p-4 fs-3">
      <li class="nav-item customli">
        <a class="nav-link" href="ver_regiones">Regiones</a>
      </li>
      <li class="nav-item customli">
        <a class="nav-link" href="ver_ciudadanos">Ciudadanos</a>
      </li>
      <li class="nav-item customli">
        <a class="nav-link " href="ver_departamentos">Departamentos</a>
      </li>
      <li class="nav-item customli">
        <a class="nav-link " href="ver_municipios">Municipios</a>
      </li>
      <li class="nav-item customli">
        <a class="nav-link " href="ver_nivelesacademicos">Niveles Academicos</a>
      </li>
      <li class="nav-item customli">
        <a class="nav-link " href="crearRegion">Agregar Region</a>
      </li>
    </ul>
  </div>
  <div class="container container border border-5 formulario">
    <h1 class="d-flex justify-content-center p-4">Regiones</h1>
    <table class="table table-border table-striped ">
      <thead>
        <tr>
          <th>Código:</th>
          <th>Nombre:</th>
          <th>Descripción</th>
        </tr>
      </thead>
      <?php
            foreach($datos as $region ):
        ?>
      <tbody>
        <tr>
          <td>
            <?php echo $region['cod_region'] ?>
          </td>
          <td>
            <?php echo $region['nombre'] ?>
          </td>
          <td>
            <?php echo $region['descripcion'] ?>
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