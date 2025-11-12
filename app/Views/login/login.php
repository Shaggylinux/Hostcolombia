<?php echo $this->extend("plantilla/layout") ?>
<?php echo $this->section("contenido") ?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal del Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
</head>

<body>

    <div class="login-wrapper">
        <div class="login-card">
            <div class="icon-circle">
                <i class="bi bi-briefcase-fill"></i>
            </div>

            <h2 class="title">Iniciar sesión</h2>
            <p class="subtitle">Inicia sesión para continuar</p>

            <?php if (session('mensaje')): ?>
                <div class="alert alert-danger"><?= session('mensaje'); ?></div>
            <?php endif; ?>

            <form action="<?= base_url('/login/verificar') ?>" method="post" class="login-form">
                <div class="mb-3 text-start">
                    <label for="usuario" class="form-label">Nombre de usuario</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" id="usuario" name="nombreusuario" class="form-control" placeholder="Ingresa tu nombre de usuario" required>
                    </div>
                </div>

                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" id="clave" name="clave" class="form-control" placeholder="Ingresa tu contraseña" required>
                        <span class="input-group-text toggle-password"><i class="bi bi-eye"></i></span>
                    </div>
                </div>

                <button type="submit" class="btn-login">Acceder</button>

            </form>

            <footer class="footer-text mt-4">
                © 2025 propiedad de SCRUM 4 o lo que sea.
            </footer>
        </div>
    </div>

    <script src="<?= base_url('js/login.js') ?>"></script>
</body>

</html>

<?php echo $this->endSection() ?>

<?php echo $this->endSection() ?>