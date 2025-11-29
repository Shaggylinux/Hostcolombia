<?php echo $this->extend("plantilla/layout-usuario") ?>
<?php echo $this->section("contenido") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar Perfil </title>
</head>

<body>
    <div class="container border mx-auto p-5 m-5 rounded-3 shadow" style="width: 500px;">
        <form class="form" method="post" action="<?php echo base_url("/usuario/actualizar/".$usuario["id"]);?>">
            <h1 class="text-center mb-4 p-3 shadow rounded-3"> Editar Perfil </h1>
            <div class="input-group mb-3 shadow">
                <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                <input type="text" class="form-control" placeholder="Nombre"
                    name="nombre" value="<?php echo $usuario["nombre"] ?>">
            </div>
            <div class="input-group mb-3 shadow">
                <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                <input type="text" class="form-control" placeholder="Nombre de Usuario"
                    name="nombreusuario" value="<?php echo $usuario["nombreusuario"] ?>">
            </div>
            <div class="input-group mb-3 shadow">
                <input type="text" class="form-control" placeholder="Correo"
                    name="correo" value="<?php echo $usuario["correo"] ?>">
            </div>
            <div>
                <button type="submit" class="btn btn-success form-control shadow"> <i class="fa-solid fa-pencil"></i> Actualizar </button>
            </div>
        </form>
    </div>
</body>

</html>

<?php echo $this->endSection() ?>