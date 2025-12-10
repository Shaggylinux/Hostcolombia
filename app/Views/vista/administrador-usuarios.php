<?php echo $this -> extend("plantilla/layout-administrador") ?>
<?php echo $this -> section("contenido") ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/Administrador.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css">
    <title>Panel de Usuarios</title>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Panel de Usuarios</h1>
            <p>Administra y gestiona todos los Usuarios</p>
        </div>

        <div class="search-section">
            <form method="get" action="" class="search-form">
                <input type="text" 
                       name="busqueda" 
                       class="search-input"
                       placeholder="Buscar por ID, nombre, usuario o correo..."
                       value="<?= esc($busqueda ?? '') ?>">

                <button class="search-btn" type="submit">
                    <i class="fa fa-search"></i> Filtrar
                </button>
            </form>
        </div>
    </div>

    <div class="export-section">
        <form action="<?= base_url('/administrador/exportar_usuarios?busqueda='.($busqueda ?? '')) ?>" method="post">
            <h4>Exportar Datos a Excel</h4>

            <div class="checkbox-grid">
                <div class="checkbox-item">
                    <input class="form-check-input" type="checkbox" name="columnas[]" value="nombre" checked>
                    <label>Nombre</label>
                </div>

                <div class="checkbox-item">
                    <input class="form-check-input" type="checkbox" name="columnas[]" value="nombreusuario" checked>
                    <label>Nombre de usuario</label>
                </div>

                <div class="checkbox-item">
                    <input class="form-check-input" type="checkbox" name="columnas[]" value="correo" checked>
                    <label>Correo</label>
                </div>
            </div>

            <button class="export-btn" type="submit"> Exportar a Excel </button>
        </form>
    </div>

    <div class="table-section">
        <div class="table-wrapper">
            <table class="servers-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Nombre de usuario</th>
                        <th>Correo</th>
                        <th>Acción</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario["nombre"] ?></td>
                        <td><?= $usuario["nombreusuario"] ?></td>
                        <td><?= $usuario["correo"] ?></td>
                        <td>
                            <?php if ($usuario["id"] == 1): ?>
                                <span class="btn-admin"> ADMINISTRADOR </span>
                            <?php else: ?>
                                <a href="<?= base_url("usuario/eliminar/".$usuario["id"]) ?>" 
                                   class="delete-btn">
                                    <i class="fa-solid fa-trash"></i> Eliminar
                                </a>
                            <?php endif ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php echo $this -> endSection() ?>