<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modificar Plan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/diseno.css">
    <link rel="stylesheet" href="../public/css/diseno.css">
    <link rel="stylesheet" href="../../../public/css/diseno.css">
</head>

<body>
  <div class="container ">
    <div class="row justify-content-center  ">
    <h1 class="d-flex justify-content-center p-4 modcontainer col-4">Actualizar Plan</h1>
    </div>
        <div class="row">
            <div class="col col-4 container border border-5 formulario modcontainer">
                <form action="<?=base_url('modificar_plan')?>" method="post">
                    <div class="mb-3">
                        <label for="txtPlanId" class="form-label">Plan Id</label>
                        <input type="number" id="txtPlanId" name="txtPlanId" class="form-control" value="<?= $datos['plan_id']; ?>"readonly >
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control" value="<?=$datos['nombre']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pago mensual</label>
                        <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control" value="<?=$datos['pago_mensual']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Cantidad de minutos</label>
                        <input type="number" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control" value="<?=$datos['cantidad_minutos']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Cantidad de mensajes</label>
                        <input type="number" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control" value="<?=$datos['cantidad_mensajes']; ?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnModificarPlan" name="btnModificarPlan" class="form-control" value="Guardar cambios">
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