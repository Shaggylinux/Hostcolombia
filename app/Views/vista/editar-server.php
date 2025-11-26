<?php echo $this -> extend("plantilla/layout-usuario")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar servidor</title>
</head>
<body>
    <div class="container border mx-auto p-5 m-5 rounded-3 shadow" style="width: 500px;">
        <form class="form" method="post" action="<?php echo base_url("/server/actualizar/".$server["id"]);?>">
            <h1 class="text-center mb-4 p-3 shadow rounded-3">Editar servidor</h1>
            <div class="input-group mb-3 shadow">
                <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                <input type="text" class="form-control" placeholder="Nombre de la maquina"
                name="nombre" value="<?php echo $server["nombre"]?>">
            </div>
            <div class="input-group mb-3 shadow">
                <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                <input type="text" class="form-control" placeholder="Breve descripcion"
                name="descripcion" value="<?php echo $server["descripcion"]?>">
            </div>
            <div class="input-group mb-3 shadow">
                <label class="input-group-text"> https://</label>
                <input type="text" class="form-control" placeholder="Dominio.com"
                name="dominio" value="<?php echo $server["dominio"]?>" >
            </div>
            <div>
                <button type="submit" class="btn btn-success form-control shadow"> <i class="fa-solid fa-pencil"></i> Actualizar </button>
            </div>
        </form>
    </div>
</body>
</html>

<?php echo $this -> endSection()?>