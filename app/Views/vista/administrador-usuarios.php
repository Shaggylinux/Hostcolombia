<?php echo $this->extend("plantilla/layout-administrador") ?>
<?php echo $this->section("contenido") ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/Administrador-usuarios.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css">
    <title>Panel de Usuarios</title>
</head>
<body>
    <h1 class="page-title">Usuarios</h1>
    <div class="search-container">
        <form method="get" action="">
            <div class="search-group">
                <input type="text" 
                       name="busqueda" 
                       class="search-input"
                       placeholder="Buscar por ID, nombre, usuario o correo..."
                       value="<?= esc($busqueda ?? '') ?>">

                <button class="search-button" type="submit">
                    <i class="fa fa-search"></i> Buscar
                </button>
            </div>
        </form>
    </div>

    <div class="export-section">
        <form action="<?= base_url('/administrador/exportar_usuarios?busqueda=' . ($busqueda ?? '')) ?>" method="post">
            <div class="export-card">
                <h5>Selecciona las columnas a exportar:</h5>

                <div class="checkbox-grid">
                    <label class="checkbox-label">
                        <input type="checkbox" name="columnas[]" value="id" checked>
                        <span>ID</span>
                    </label>
                    
                    <label class="checkbox-label">
                        <input type="checkbox" name="columnas[]" value="nombre" checked>
                        <span>Nombre</span>
                    </label>
                    
                    <label class="checkbox-label">
                        <input type="checkbox" name="columnas[]" value="nombreusuario" checked>
                        <span>Nombre de usuario</span>
                    </label>
                    
                    <label class="checkbox-label">
                        <input type="checkbox" name="columnas[]" value="correo" checked>
                        <span>Correo</span>
                    </label>
                </div>

                <button class="export-button" type="submit">
                    Descargar Excel
                </button>
            </div>
        </form>
    </div>

    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Nombre de usuario</td>
                    <td>Correo</td>
                    <td>Acción</td>
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
                            <span class="btn-admin">ADMINISTRADOR</span>
                        <?php else: ?>
                            <a href="<?= base_url("usuario/eliminar/".$usuario["id"]) ?>" 
                               class="btn-delete">
                                <i class="fa-solid fa-trash"></i> Eliminar
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
