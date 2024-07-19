<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Agregar Municipio</title>
</head>

<body>
    <div class="container">
        <h1 class="d-flex justify-content-center align-items-center p-4">Nuevo Municipio</h1>
        <div class="row">
            <div class="col col-4 container border border-5 formulario">
                <form action="crearMunicipio" method="post">
                    <div class="mb-3">
                        <label for="numMunicipio" class="form-label">Ingrese un nuevo código de Municipio:</label>
                        <input type="number" id="numMunicipio" name="numMunicipio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombreMuncicipio" class="form-label">Ingrese nuevo nombre de Municipio:</label>
                        <input type="text" id="nombreMuncicipio" name="nombreMuncicipio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numDepartamento" class="form-label">Ingrese nuevo codigo de departamento:</label>
                        <input type="text" id="numDepartamento" name="numDepartamento" class="form-control">
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