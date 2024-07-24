<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/diseno.css') ?>">
</head>

<body>
    <header>
        <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="bg-dark p-4">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_menu') ?>"><i
                                class="bi bi-menu-app-fill"></i> Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_clientes')?>"><i
                                class="bi bi-person-vcard"></i>
                            Clientes</a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <p class="mb-0 text-white"><i class="bi bi-database"></i> Base de datos telefonía</p>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <main class="container p-4 d-flex justify-content-center">
        <div class="card mb-3 modcontainer" style="max-width: 540px;">
            <div class="card-header text-center">
                <h2>Modificar Cliente</h2>
            </div>
            <div class="card-body">
                <form action="<?= base_url('modificar_cliente') ?>" method="post">
                    <div class="mb-3">
                        <label for="txtId" class="form-label"><i class="bi bi-person-vcard-fill"></i> Cliente ID</label>
                        <input type="number" id="txtId" name="txtId" class="form-control"
                            value="<?= $datos['cliente_id']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label"><i class="bi bi-person-add"></i> Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control"
                            value="<?= $datos['apellido']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label"><i class="bi bi-person-add"></i> Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            value="<?= $datos['nombre']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCorreoElectronico" class="form-label"><i class="bi bi-envelope-at-fill"></i>
                            Correo electrónico</label>
                        <input type="email" id="txtCorreoElectronico" name="txtCorreoElectronico" class="form-control"
                            value="<?= $datos['correo_electronico']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCalleAvenida" class="form-label"><i class="bi bi-signpost-split"></i>
                            Calle/Avenida</label>
                        <input type="text" id="txtCalleAvenida" name="txtCalleAvenida" class="form-control"
                            value="<?= $datos['calle_avenida']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtNumeroCasa" class="form-label"><i class="bi bi-house-fill"></i> Número de
                            casa</label>
                        <input type="number" id="txtNumeroCasa" name="txtNumeroCasa" class="form-control"
                            value="<?= $datos['no_casa']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtZona" class="form-label"><i class="bi bi-map-fill"></i> Zona</label>
                        <input type="number" id="txtZona" name="txtZona" class="form-control"
                            value="<?= $datos['zona']; ?>">
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>