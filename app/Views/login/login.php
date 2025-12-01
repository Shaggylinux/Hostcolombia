<?= $this->extend("plantilla/layout") ?>
<?= $this->section("css") ?>
<link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
<?= $this->endSection() ?>
<?= $this->section("contenido") ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Iniciar sesion </title>
</head>
<body>
    <div class="login-page">
        <div class="login-wrapper">
            <div class="login-card">
                <div class="icon-circle">
                    <img src="<?= base_url('imagenes/logo.png') ?>" alt="logo" style=":width: 12px;">
                </div>
                <h2 class="title">Iniciar sesión</h2>
                <?php if (session('mensaje')): ?>
                    <div class="alert alert-danger"><?= session('mensaje'); ?></div>
                <?php endif; ?>
                <form action="<?= base_url('/login/verificar') ?>" method="post" class="login-form">
                    <div class="mb-3 text-start">
                        <label for="usuario" class="form-label">Nombre de usuario</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" id="usuario" name="nombreusuario" class="form-control"
                                placeholder="Ingresa tu nombre de usuario" required>
                        </div>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" id="clave" name="clave" class="form-control"
                                placeholder="Ingresa tu contraseña" required>
                            <span class="input-group-text toggle-password"><i class="bi bi-eye"></i></span>
                        </div>
                    </div>
                    <button type="submit" class="btn-login">Acceder</button>
                </form>
                <footer class="footer-text mt-4">
                    © 2025 propiedad de SCRUM 4.
                </footer>
            </div>
        </div>
    </div>
</body>

<?php $this -> endSection()  ?>
<?php $this -> section("js") ?>
<script src="<?= base_url('js/login.js') ?>"> </script>
<?php $this -> endSection() ?>