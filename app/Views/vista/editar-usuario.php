<?php echo $this->extend("plantilla/layout-usuario") ?>
<?php echo $this->section("contenido") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/editar.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="edit-container">
        <form class="form" method="post" action="<?php echo base_url("/usuario/actualizar/".$usuario["id"]);?>">
            <h1 class="edit-title">Editar Usuario</h1>
            
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                <input type="text" class="form-control" placeholder="Nombre"
                    name="nombre" value="<?php echo $usuario["nombre"] ?>" required>
            </div>
            
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                <input type="text" class="form-control" placeholder="Nombre de Usuario"
                    name="nombreusuario" value="<?php echo $usuario["nombreusuario"] ?>" required>
            </div>
            
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Correo"
                    name="correo" value="<?php echo $usuario["correo"] ?>" required>
            </div>
            
            <div>
                <button type="submit" class="btn-success">
                    <i class="fa-solid fa-pencil"></i> Actualizar
                </button>
            </div>
        </form>
    </div>
</body>

</html>

<?php echo $this->endSection() ?>
