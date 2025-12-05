<?php echo $this -> extend("plantilla/layout-administrador")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('assets/css/Administrador.css') ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css">
        <title> Panel de Servidores </title>
    </head>
    <body>
        <div class="admin-container">
            <div class="admin-header">
                <h1>Panel de Servidores</h1>
                <p>Administra y gestiona todos tus servidores tunnel</p>
            </div>
            <div class="search-section">
                <form method="get" action="" class="search-form">
                    <input 
                        type="text" 
                        name="busqueda" 
                        class="search-input" 
                        placeholder="Buscar por ID, Nombre o Dominio..."
                        value="<?= esc($_GET['busqueda'] ?? '') ?>">
                    <button class="search-btn" type="submit">
                        <i class="fa fa-search"></i> Filtrar
                    </button>
                </form>
            </div>
            <div class="export-section">
                <form action="<?= base_url('/administrador/exportar_servidor?busqueda=' . ($busqueda ?? '')) ?>" method="post">
                    <h4>Exportar Datos a Excel</h4>
                    <div class="checkbox-grid">
                        <div class="checkbox-item">
                            <input class="form-check-input" type="checkbox" name="columnas[]" value="nombre" id="col-nombre" checked>
                            <label for="col-nombre">Nombre</label>
                        </div>
                        <div class="checkbox-item">
                            <input class="form-check-input" type="checkbox" name="columnas[]" value="descripcion" id="col-descripcion" checked>
                            <label for="col-descripcion">Descripción</label>
                        </div>
                        <div class="checkbox-item">
                            <input class="form-check-input" type="checkbox" name="columnas[]" value="dominio" id="col-dominio" checked>
                            <label for="col-dominio">Dominio</label>
                        </div>
                        <div class="checkbox-item">
                            <input class="form-check-input" type="checkbox" name="columnas[]" value="id_usuario" id="col-id-usuario" checked>
                            <label for="col-id-usuario">ID Usuario</label>
                        </div>
                    </div>
                    <button class="export-btn" type="submit"> Exportar a Excel </button>
                </form>
            </div>
            <div class="table-section">
                <div class="table-wrapper">
                    <?php if(!empty($todo)): ?>
                        <table class="servers-table">
                            <thead>
                                <tr>
                                    <th> Nombre      </th>
                                    <th> Descripción </th>
                                    <th> Dominio     </th>
                                    <th> Acción      </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($todo as $t): ?>
                                <tr>
                                    <td><?php echo $t -> nombre ?></td>
                                    <td><?php echo $t -> descripcion ?></td>
                                    <td><?php echo $t -> dominio ?></td>
                                    <td>
                                        <a href="<?php echo base_url('/servidor/eliminar/'.$t->id)?>" class="delete-btn">
                                            <i class="fa-solid fa-trash"></i> Eliminar
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <div class="empty-state">
                            <i class="fa-solid fa-server"></i>
                            <p> No se encontraron servidores </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>
<?php echo $this -> endSection()?>