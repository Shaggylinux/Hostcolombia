<?php echo $this->extend("plantilla/layout") ?>
<?php echo $this->section("contenido") ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center m-3 border-bottom pb-4 border-5">Iniciar Sesión</h1>
        <form class="border p-4 rounded shadow mx-auto" style="max-width: 400px;">
            <div class="input-group mb-3">
                <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                <input type="text" class="form-control" placeholder="Nombre en pantalla" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"> <i class="fa-solid fa-lock"></i> </span>
                <input type="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"> <i class="fa-solid fa-right-to-bracket"></i> </span>
                <input type="submit" name="enviar" class="form-control btn btn-primary" value="Iniciar sesion">
            </div>
        </form>
    </div>

</body>
</html>

<?php echo $this->endSection() ?>
