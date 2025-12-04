<?php echo $this -> extend("plantilla/layout")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <div class="border rounded-5 shadow mx-auto m-5 p-4" style="max-width: 500px;">
        <h1 class="text-center mb-5"> Registrarse </h1>
        <form action="<?= base_url('/login/crearcuenta') ?>" method="post">
            <td>
                <tr>
                    <div class="input-group mb-3 shadow">
                        <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" class="form-control" required>
                    </div>
                </tr>
                <tr>
                    <div class="input-group mb-3 shadow">
                        <span class="input-group-text"> <i class="fa-solid fa-display"></i> </span>
                        <input type="text" placeholder="Nombre en pantalla" name="nombreusuario" class="form-control" required>
                    </div>
                </tr>
                <tr>
                    <div class="input-group mb-3 shadow">
                        <span class="input-group-text"> <i class="fa-solid fa-lock"></i> </span>
                        <input type="password" placeholder="Contraseña" name="clave" class="form-control"required >
                    </div>
                </tr>
                <tr>
                    <div class="input-group mb-3 shadow">
                        <span class="input-group-text"> <i class="fa-solid fa-envelope"></i> </span>
                        <input type="email" placeholder="Correo" name="correo" class="form-control" required>
                    </div>
                </tr>
                <tr>
                    <div class="input-group mb-3 shadow">
                        <button type="submit" class="btn btn-primary form-control shadow"> <i class="fa-solid fa-user-plus"></i> Registrar </button>
                    </div>
                </tr>
            </td>
        </form>
    </div>
</body>
</html>

<?php echo $this -> endSection()?>