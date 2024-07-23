<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Niveles Academicos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/diseno.css">
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
        <a class="nav-link " href="crearNivelAcademico">Crear Nivel Academico</a>
      </li>
    </ul>
  </div>
  <div class="container container border border-5 formulario">
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
          <td>
            <a href="" class="btn btn-info">Actualizar</a>
            <a href="eliminar_NivelAcademico/<?php echo $nivelesacademicos['cod_nivel_acad']?>" class="btn btn-danger">Eliminar</a>
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