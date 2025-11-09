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
    <form class="p-5 mx-auto border border-primary-subtle border-3 rounded-3">
        <td>
            <tr>
                <input type="text" placeholder="Nombre" class="form-control mb-3" required>
            </tr>
            <tr>
                <input type="text" placeholder="Nombre en pantalla" class="form-control mb-3" required>
            </tr>
            <tr>
                <input type="password" placeholder="Contraseña" class="form-control mb-3" required>
            </tr>
            <tr>
                <input type="email" placeholder="Correo" class="form-control mb-3" required>
            </tr>
            <tr>
                <input type="submit" value="Crear cuenta" class="btn btn-success mb-3">
            </tr>
        </td>
    </form>
</body>
</html>

<?php echo $this -> endSection()?>
