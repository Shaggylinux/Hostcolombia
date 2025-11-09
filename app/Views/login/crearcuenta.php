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
    <form class="p-5 mx-auto border border-primary-subtle border-3 rounded-3" method="post">
        <td>
            <tr>
                <input type="text" placeholder="Nombre" name="nombre" class="form-control mb-3">
            </tr>
            <tr>
                <input type="text" placeholder="Nombre en pantalla" name="nombreusuario" class="form-control mb-3">
            </tr>
            <tr>
                <input type="password" placeholder="Contraseña" name="clave" class="form-control mb-3">
            </tr>
            <tr>
                <input type="email" placeholder="Correo" name="email" class="form-control mb-3">
            </tr>
            <tr>
                <input type="submit" value="Crear cuenta" name="enviar" class="btn btn-success mb-3">
            </tr>

        </td>
    </form>
        <?php if ($request):?>
            <?php if (strlen($Nombre) >= 1 and strlen($NombreUsuario) >= 1 and strlen($Clave) >= 1):?>
                <tr>
                    <h1 class="bg-success text-center">  <?php echo $correcto?> </h1>
                </tr>
            <?php else :?>
                <tr>
                    <h1 class="bg-danger text-center">  <?php echo $error?> </h1>
                </tr>
                <?php endif?>
        <?php endif?>
</body>
</html>

<?php echo $this -> endSection()?>