<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Planes_Nuevos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/diseno.css">
</head>

<body>
  <div class="container  ">
    <h1 class="d-flex justify-content-center p-4">Nuevo Plan</h1>
        <div class="row">
            <div class="col col-4 container border border-5 formulario">
                <form action="agregar_plan" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Plan Id</label>
                        <input type="number" id="txtPlanId" name=txtPlanId"" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pago mensual</label>
                        <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Cantidad de minutos</label>
                        <input type="number" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Cantidad de mensajes</label>
                        <input type="number" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="form-control">
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