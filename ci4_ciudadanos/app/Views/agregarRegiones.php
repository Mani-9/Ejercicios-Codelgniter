<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/diseno.css">
    <title>Agregar Regiones</title>
</head>

<body>
    <div class="container">
        <h1 class="d-flex justify-content-center align-items-center p-4">Nueva Región</h1>
        <div class="row">
            <div class="col col-4 container border border-5 formulario">
                <form action="crearRegion" method="post">
                    <div class="mb-3">
                        <label for="numCodigoRegion" class="form-label">Ingrese un nuevo código de región:</label>
                        <input type="number" id="numCodigoRegion" name="numCodigoRegion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombreRegion" class="form-label">Ingrese nuevo nombre de región:</label>
                        <input type="text" id="nombreRegion" name="nombreRegion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descripcionRegion" class="form-label">Ingrese nueva descripción para la
                            región:</label>
                        <input type="text" id="descripcionRegion" name="descripcionRegion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnAgregarRegion" name="btnAgregarRegion" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>