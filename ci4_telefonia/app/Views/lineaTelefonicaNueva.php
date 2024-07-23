<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Linea telefonica Nueva</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/diseno.css">
    <link rel="stylesheet" href="../public/css/diseno.css">
</head>

<body>
  <div class="container ">
  <div class="row justify-content-center">
        <h2 class="d-flex justify-content-center p-2 modcontainer col-4">Lineas Telefonica nueva</h2>
     </div>
        <div class="row">
            <div class="col col-4 container border border-5 formulario modcontainer">
                <form action="agregar_linea_telefonica" method="post">
                <div class="mb-3">
                        <label for="" class="form-label">Numero De telefono</label>
                        <input type="number" id="txtNumeroTelefono" name="txtNumeroTelefono" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha de pago</label>
                        <input type="number" id="txtFechaPago" name="txtFechaPago" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Meses Atrasados</label>
                        <input type="number" id="txtMesesAtrasados" name="txtMesesAtrasados" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Id plan</label>
                        <input type="text" id="txtIdPlan" name="txtIdPlan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Id Cliente</label>
                        <input type="number" id="txtIdCliente" name="txtIdCliente" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnCrear" name="btnCrear" class="form-control">
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