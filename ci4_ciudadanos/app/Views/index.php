<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu CI4 ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/diseno.css')?>">
</head>

<body>
    <header>
        <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="bg-dark p-4">
                <ul class="nav ">
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="<?= base_url('ver_regiones')?>"><i class="bi bi-map"></i> Regiones</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="<?= base_url('ver_nivelesacademicos')?>"><i class="bi bi-book"></i> Niveles Academicos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="<?= base_url('ver_ciudadanos')?>"><i class="bi bi-people-fill"></i> Ciudadanos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="<?= base_url('ver_departamentos')?>"><i class="bi bi-globe-americas"></i> Departamentos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="<?= base_url('ver_municipios')?>"><i class="bi bi-pin-map"></i> Municipios</a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <p class="mb-0 text-white"><i class="bi bi-database"></i> Base de datos ciudadanos</p>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <main class="">
                    <p><i class="bi bi-database"></i> Base de datos Ciudada</p>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>