<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Agregar Departamento</title>
</head>

<body>
    <div class="container">
        <h1 class="d-flex justify-content-center align-items-center p-4">Nuevo Departamento</h1>
        <div class="row">
            <div class="col col-4 container border border-5 formulario">
                <form action="crearDepartamento" method="post">
                    <div class="mb-3">
                        <label for="codDepartamento" class="form-label">Ingrese un nuevo código de Departamento:</label>
                        <input type="number" id="codDepartamento" name="codDepartamento" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombreDepartamento" class="form-label">Ingrese nuevo nombre de Departamento:</label>
                        <input type="text" id="nombreDepartamento" name="nombreDepartamento" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="codRegion" class="form-label">Ingrese nuevo codigo de Region:</label>
                        <input type="text" id="codRegion" name="codRegion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="bntAgregarRegion" name="bntAgregarRegion" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>