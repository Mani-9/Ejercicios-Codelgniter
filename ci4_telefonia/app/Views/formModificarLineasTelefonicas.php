<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Linea telefonica Nueva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/diseno.css')?>">
</head>

<body>
    <header>
        <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="bg-dark p-4">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_menu')?>"><i
                                class="bi bi-menu-app-fill"></i> Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_lineas_Telefonicas')?>"><i
                                class="bi bi-telephone-forward-fill"></i> Lineas Telefonicas</a>
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
    <main class="container p-4 d-flex justify-content-center ">
        <div class="card mb-3 modcontainer " style="max-width: 540px;">
            <div class="card-header text-center">
                <h2>Modificar linea telefonica</h2>
            </div>
            <div class="card-body ">
                <form action="<?= base_url('modificar_linea_telefonica') ?>" method="post">

                    <div class="mb-3">
                        <label for="txtNumeroTelefono" class="form-label">Numero De telefono</label>
                        <input type="number" id="txtNumeroTelefono" name="txtNumeroTelefono" class="form-control"
                            value="<?= $datos['no_telefono']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtFechaPago" class="form-label">Fecha de pago</label>
                        <input type="number" id="txtFechaPago" name="txtFechaPago" class="form-control"
                            value="<?= $datos['fecha_pago']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtMesesAtrasados" class="form-label">Meses Atrasados</label>
                        <input type="number" id="txtMesesAtrasados" name="txtMesesAtrasados" class="form-control"
                            value="<?= $datos['meses_atraso']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtIdPlan" class="form-label">Id plan</label>
                        <input type="text" id="txtIdPlan" name="txtIdPlan" class="form-control"
                            value="<?= $datos['plan_id']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtIdCliente" class="form-label">Id Cliente</label>
                        <input type="number" id="txtIdCliente" name="txtIdCliente" class="form-control"
                            value="<?= $datos['cliente_id']; ?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnCrear"  class="form-control">
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