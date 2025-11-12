<?php echo $this -> extend("plantilla/layout-usuario")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
</head>
<body>
    <div class="container border rounded p-5 m-5 mx-auto shadow" style="width: 500px;">
        <h1 class="text-center">MAQUINAS</h1>
        <button class="btn btn-success form-control shadow"> <i class="fa-solid fa-plus"></i> </button>
    </div>
</body>
</html>

<?php echo $this -> endSection()?>