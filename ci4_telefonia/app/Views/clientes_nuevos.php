<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clientes Nuevos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/diseno.css">
</head>

<body>
  <div class="container ">
    <h1 class="d-flex justify-content-center p-4">Nuevo Cliente</h1>
        <div class="row">
            <div class="col col-4 container border border-5 formulario">
                <form action="agregar_cliente" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Cliente Id</label>
                        <input type="number" id="txtId" name="txtId" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Correo electronico</label>
                        <input type="text" id="txtCorreoElectronico" name="txtCorreoElectronico" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Calle avenida</label>
                        <input type="text" id="txtCalleAvenida" name="txtCalleAvenida" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Numero de casa</label>
                        <input type="number" id="txtNumeroCasa" name="txtNumeroCasa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Zona</label>
                        <input type="number" id="txtZona" name="txtZona" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardar" name="btnGuardar" class="form-control">
                    </div>
                </form>
            </div>
        </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>