<?php echo $this->extend("plantilla/layout-administrador") ?>
<?php echo $this->section("contenido") ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css">
    <title>Panel de Usuarios</title>
</head>
<body>
    <h1 class="text-center">Usuarios</h1>

    <form method="get" action="">
        <div class="input-group mb-3 mt-3">
            <input type="text" name="busqueda" class="form-control"
                   placeholder="Buscar por ID, nombre, usuario o correo..."
                   value="<?= esc($busqueda ?? '') ?>">

            <button class="btn btn-primary">
                <i class="fa fa-search"></i> Buscar
            </button>
        </div>
    </form>

    <div class="mt-3">
        <form action="<?= base_url('/administrador/exportar_usuarios?busqueda=' . ($busqueda ?? '')) ?>" method="post">
            <div class="card p-3 shadow-sm">

                <h5>Selecciona las columnas a exportar:</h5>

                <label><input type="checkbox" name="columnas[]" value="id" checked> ID</label><br>
                <label><input type="checkbox" name="columnas[]" value="nombre" checked> Nombre</label><br>
                <label><input type="checkbox" name="columnas[]" value="nombreusuario" checked> Nombre de usuario</label><br>
                <label><input type="checkbox" name="columnas[]" value="correo" checked> Correo</label><br>

                <button class="btn btn-success mt-3">
                    Descargar Excel
                </button>
            </div>
        </form>
    </div>

    <div class="container mt-4 shadow border p-4 rounded-5 border-5 mx-auto">
        <table class="table table-striped table-hover table-bordered align-middle text-center">
            <thead class="table-primary">
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Nombre de usuario</td>
                    <td>Correo</td>
                    <td>Acción</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario["id"] ?></td>
                    <td><?= $usuario["nombre"] ?></td>
                    <td><?= $usuario["nombreusuario"] ?></td>
                    <td><?= $usuario["correo"] ?></td>
                    <td>
                        <?php if ($usuario["id"] == 1): ?>
                            <a class="btn btn-warning btn-sm shadow-sm">ADMINISTRADOR</a>
                        <?php else: ?>
                            <a href="<?= base_url("usuario/eliminar/".$usuario["id"]) ?>" class="btn btn-danger btn-sm shadow-sm">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        <?php endif ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php echo $this->endSection() ?>
