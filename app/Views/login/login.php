<?php echo $this -> extend("plantilla/layout")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 border p-5 m-4 mx-auto rounded-5 shadow" style="max-width: 400px;">
        <h1 class="text-center mb-4 shadow rounded-3"> Iniciar sesión </h1>

        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('/login/verificar') ?>">
            <div class="mb-3 input-group shadow">
                <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                <input type="text" name="nombreusuario" id="usuario" class="form-control" placeholder="Nombre en pantalla" required>
            </div>

            <div class="mb-3 input-group shadow">
                <span class="input-group-text"> <i class="fa-solid fa-lock"></i> </span>
                <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña" required>
            </div>
            
            <button type="submit" class="btn btn-primary form-control shadow"> <i class="fa-solid fa-right-to-bracket"></i> Iniciar sesion </button>
        </form>
    </div>
</body>
</html>

<?php echo $this -> endSection()?>