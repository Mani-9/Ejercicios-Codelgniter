<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Agregar Nivel Academico</title>
</head>

<body>
    <div class="container">
        <h1 class="d-flex justify-content-center align-items-center p-4">Agregar Nivel Academico</h1>
        <div class="row">
            <div class="col col-4 container border border-5 formulario">
                <form action="crearNivelAcademico" method="post">
                    <div class="mb-3">
                        <label for="numCodigoNivelAcademico" class="form-label">Ingrese un nuevo código de nivel
                            academico:</label>
                        <input type="number" id="numCodigoNivelAcademico" name="numCodigoNivelAcademico"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombreNivelAcademico" class="form-label">Ingrese nuevo nombre de nivel
                            academico:</label>
                        <input type="text" id="nombreNivelAcademico" name="nombreNivelAcademico" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descripcionNivelAcademico" class="form-label">Ingrese nueva descripción para el
                            nivel academico:</label>
                        <input type="text" id="descripcionNivelAcademico" name="descripcionNivelAcademico"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnAgregarNivelAcademico" name="btnAgregarRegion" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>