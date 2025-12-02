<?php echo $this -> extend("plantilla/layout-administrador")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css">
        <title>Panel de servidores</title>
    </head>
    <body>
        <h1 class="text-center">Servidores</h1>

<form method="get" action="">
    <div class="input-group mb-3">
        <input type="text" name="busqueda" class="form-control" placeholder="Buscar por ID o Nombre..."
               value="<?= esc($_GET['busqueda'] ?? '') ?>">
        <button class="btn btn-primary" type="submit">
            <i class="fa fa-search"></i> Filtrar
        </button>
    </div>
</form>
<form action="<?= base_url('/administrador/exportar_servidor?busqueda=' . ($busqueda ?? '')) ?>" method="post">
    <h4>Selecciona las columnas a exportar:</h4>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="columnas[]" value="id" checked>
        <label class="form-check-label">ID</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="columnas[]" value="nombre" checked>
        <label class="form-check-label">Nombre</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="columnas[]" value="descripcion" checked>
        <label class="form-check-label">Descripción</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="columnas[]" value="dominio" checked>
        <label class="form-check-label">Dominio</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="columnas[]" value="id_usuario" checked>
        <label class="form-check-label">ID Usuario</label>
    </div>

    <button class="btn btn-success mt-3" type="submit">Exportar servidores a</button>
</form>
        <div class="container  mt-4 shadow border p-4 rounded-5 border-5 mx-auto m-4">
            <table class="table table-striped table-hover table-bordered align-middle rounded text-center">
                <thead class="table-primary">
                    <tr>
                        <td> ID USUARIO  </td>
                        <td> Nombre      </td>
                        <td> Descripcion </td>
                        <td> Dominio     </td>
                        <td> Accion      </td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($todo as $t):?>
                    <tr>
                        <td> <?php echo $t -> id_usuario  ?> </td>
                        <td> <?php echo $t -> nombre      ?> </td>
                        <td> <?php echo $t -> descripcion ?> </td>
                        <td> <?php echo $t -> dominio     ?> </td>
                        <td>
                            <a href="<?php echo base_url('login/eliminar/'.$t->id)?>" class="btn btn-danger btn-sm shadow-sm"> <i class="fa-solid fa-trash"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </body>
</html>

<?php echo $this -> endSection()?>