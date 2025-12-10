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
        <form method="post">
            <h1 class="edit-title">Agregar Tunnel</h1>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                <input type="text" class="form-control" placeholder="Nombre del tunnel"
                    name="nombreserver" required>
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                <input type="text" class="form-control" placeholder="Descripcion"
                    name="descripcionserver" required>
            </div>
            <div class="input-group">
                <span class="input-group-text">HTTPS://</span>
                <input type="text" class="form-control" placeholder="Dominio"
                    name="dominioserver" required>
            </div>
            <div>
                <button class="btn btn-success form-control shadow"> <i class="fa-solid fa-plus"></i> AGREGAR </button>
            </div>
        </form>
    </div>
</body>

</html>

<?php echo $this->endSection() ?>
