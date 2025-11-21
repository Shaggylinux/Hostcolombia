<?php echo $this -> extend("plantilla/layout-administrador")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css">
    <title>administrador</title>
</head>
<body>
    <h1 class="text-center"> Usuario </h1>
    <div class="container  mt-4 shadow border p-4 rounded-5 border-5 mx-auto m-4">
        <table class="table table-striped table-hover table-bordered align-middle rounded text-center">
            <thead class="table-primary text-center table-holder">
                <tr>
                    <td> ID                </td>
                    <td> Nombre            </td>
                    <td> Nombre de usuario </td>
                    <td> Correo            </td>
                    <td> Accion            </td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $usuario):?>
                <tr>
                    <td> <?php echo $usuario -> id?>            </td>
                    <td> <?php echo $usuario -> nombre?>        </td>
                    <td> <?php echo $usuario -> nombreusuario?> </td>
                    <td> <?php echo $usuario -> correo?>        </td>
                    <td>
                        <?php if($usuario -> id == 1):?>
                            <a class="btn btn-warning btn-sm shadow-sm"> ADMINISTRADOR </a>
                        <?php else:?>
                            <a href="<?php echo base_url("usuario/eliminar/".$usuario -> id)?>" class="btn btn-danger btn-sm shadow-sm"> <i class="fa-solid fa-trash"></i> </a>
                        <?php endif ?>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php echo $this -> endSection()?>