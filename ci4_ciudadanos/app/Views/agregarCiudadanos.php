<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Agregar Ciudadanos</title>
</head>

<body>
    <div class="container">
        <h1 class="d-flex justify-content-center align-items-center p-4">Nuevo Ciudadano</h1>
        <div class="row">
            <div class="col col-4 container border border-5 formulario">
                <form action="crearCiudadano" method="post">
                    <div class="mb-3">
                        <label for="numDpi" class="form-label">Ingrese DPI del nuevo ciudadano:</label>
                        <input type="number" id="numDpi" name="numDpi" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="apellidoCiudadano" class="form-label">Ingrese nuevo apellido de Ciudadano:</label>
                        <input type="text" id="apellidoCiudadano" name="apellidoCiudadano" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombreCiudadano" class="form-label">Ingrese nuevo nombre de Ciudadano:</label>
                        <input type="text" id="nombreCiudadano" name="nombreCiudadano" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numDireccion" class="form-label">Ingrese nueva direccion del ciudadano:</label>
                        <input type="text" id="numDireccion" name="numDireccion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numTelefonoCasa" class="form-label">Ingrese nueva Telefono casa:</label>
                        <input type="number" id="numTelefonoCasa" name="numTelefonoCasa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numTelefonoMovil" class="form-label">Ingrese nueva Telefono movil:</label>
                        <input type="number" id="numTelefonoMovil" name="numTelefonoMovil" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Ingrese nueva email:</label>
                        <input type="text" id="txtEmail" name="txtEmail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numFechaNacimiento" class="form-label">Ingrese fechas de nacimiento:</label>
                        <input type="date" id="numFechaNacimiento" name="numFechaNacimiento" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="codNivelAcademico" class="form-label">Ingrese codigo de nivel academico:</label>
                        <input type="number" id="codNivelAcademico" name="codNivelAcademico" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="codMunicipio" class="form-label">Ingrese codigo de municipio:</label>
                        <input type="number" id="codMunicipio" name="codMunicipio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="codContraseña" class="form-label">Ingrese nueva contraseña:</label>
                        <input type="text" id="codContraseña" name="codContraseña" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnAgregarCiudadano" name="btnAgregarCiudadano" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>