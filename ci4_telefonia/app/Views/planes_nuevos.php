<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes_Nuevos</title>
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
                        <a class="nav-link text-white" href="<?= base_url('ver_menu')?>"><i
                                class="bi bi-menu-app-fill"></i> Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_planes')?>">
                            <i class="bi bi-pip"></i>
                            Planes</a>
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
                <h2>Nuevo Plan</h2>
            </div>
            <div class="card-body">
                <form action="agregar_plan" method="post">
                    <div class="mb-3">
                        <label for="txtPlanId" class="form-label">Plan Id</label>
                        <input type="number" id="txtPlanId" name="txtPlanId" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtPagoMensual" class="form-label">Pago mensual</label>
                        <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMinutos" class="form-label">Cantidad de minutos</label>
                        <input type="number" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMensajes" class="form-label">Cantidad de mensajes</label>
                        <input type="number" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="form-control">
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