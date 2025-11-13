<?php echo $this -> extend("plantilla/layout-usuario")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar servidor</title>
</head>
<body>
    <div class="container border mx-auto p-5 m-5 rounded-3 shadow" style="width: 500px;">
        <form class="form" method="post">
            <h1 class="text-center mb-4 p-3 shadow rounded-3">Agregar servidor</h1>
            <div class="input-group mb-3 shadow">
                <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                <input type="text" class="form-control" placeholder="Nombre de la maquina" name="nombreserver" required>
            </div>
            <div class="input-group mb-3 shadow">
                <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                <input type="text" class="form-control" placeholder="Breve descripcion" name="descripcionserver" required>
            </div>
            <div class="input-group mb-3 shadow">
                <label class="input-group-text"> https://</label>
                <input type="text" class="form-control" placeholder="Dominio.com" name="dominioserver" required>
            </div>
            <h3 class="text-center">DNS:</h3>
            <div class="input-group mb-3 shadow">
                <input type="text" class="form-control" maxlength="3" name="dns1" required>
                <span class="input-group-text"><i class="fa-solid fa-slash fa-flip-horizontal"></i></span>
                <input type="text" class="form-control" maxlength="3" name="dns2" required>
                <span class="input-group-text"><i class="fa-solid fa-slash fa-flip-horizontal"></i></span>
                <input type="text" class="form-control" maxlength="3" name="dns3" required>
                <span class="input-group-text"><i class="fa-solid fa-slash fa-flip-horizontal"></i></span>
                <input type="text" class="form-control" maxlength="3" name="dns4" required>
            </div>

            <div>
                <button class="btn btn-success form-control shadow"><i class="fa-solid fa-plus"></i> AGREGAR</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php echo $this -> endSection()?>