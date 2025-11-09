<?php echo $this -> extend("plantilla/layout")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center m-3 border-bottom pb-4 border-5">Crear cuenta</h1>
        <form class="border p-4 rounded shadow mx-auto" style="max-width: 500px;" method="post">
            <td>
                <tr>
                    <div class="input-group mb-3">
                        <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" class="form-control">
                    </div>
                </tr>
                <tr>
                    <div class="input-group mb-3">
                        <span class="input-group-text"> <i class="fa-solid fa-display"></i> </span>
                        <input type="text" placeholder="Nombre en pantalla" name="nombreusuario" class="form-control">
                    </div>
                </tr>
                <tr>
                    <div class="input-group mb-3">
                        <span class="input-group-text"> <i class="fa-solid fa-lock"></i> </span>
                        <input type="password" placeholder="Contraseña" name="clave" class="form-control">
                    </div>
                </tr>
                <tr>
                    <div class="input-group mb-3">
                        <span class="input-group-text"> <i class="fa-solid fa-envelope"></i> </span>
                        <input type="email" placeholder="Correo" name="email" class="form-control">
                    </div>
                </tr>
                <tr>
                    <div class="input-group mb-3">
                        <span class="input-group-text"> <i class="fa-solid fa-user-plus"></i> </span>
                        <input type="submit" name="enviar" class="form-control btn btn-primary" value="CREAR CUENTA">
                    </div>
                </tr>
            </td>
        </form>
    </div>
        <?php if ($request):?>
            <?php if (strlen($Nombre) >= 1 and strlen($NombreUsuario) >= 1 and strlen($Clave) >= 1):?>
                <h1 class="text-center m-3 alert alert-success shadow"> <?php echo $correcto?> </h1>
            <?php else :?>
                <h1 class="text-center m-3 alert alert-danger shadow"> <?php echo $error?> </h1>
             <?php endif?>
        <?php endif?>
</body>
</html>

<?php echo $this -> endSection()?>