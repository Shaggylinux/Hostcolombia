<?= $this->extend("plantilla/layout") ?>

<?= $this->section("css") ?>
<link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
<?= $this->endSection() ?>
<?= $this->section("contenido") ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="login-page">
        <div class="background-logo">右</div>
<div class="login-wrapper">
    <div class="login-card">
        <div class="icon-circle">
            <div class="server-icon">
                <div class="server-body">
                    <div class="server-lights">
                        <span class="light light-1"></span>
                        <span class="light light-2"></span>
                        <span class="light light-3"></span>
                    </div>
                    <div class="server-lines">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="login-title">Iniciar sesión</h2>
        <p class="login-subtitle">Inicia sesión para continuar</p>
        <?php if (session('mensaje')): ?>
            <div class="error-message"><?= session('mensaje'); ?></div>
        <?php endif; ?>
        <form action="<?= base_url('/login/verificar') ?>" method="post" class="login-form">
            <div class="mb-3 text-start">
                <label for="usuario" class="form-label">Nombre de usuario</label>
                <div class="input-group">
                    <input type="text" id="usuario" name="nombreusuario" class="form-control" placeholder="Nombre de usuario" required>
                </div>
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input type="password" id="clave" name="clave" class="form-control" placeholder="Contraseña" required>
                </div>
            </div>
            <button type="submit" class="btn-submit">Acceder</button>
        </form>
        <footer class="footer-text mt-4"> © 2025 propiedad de SCRUM 4. </footer>
    </div>
</body>


<?= $this->section("js") ?>
<script src="<?= base_url('js/login.js') ?>"></script>

<?= $this->endSection() ?>
<?php $this -> endSection()  ?>
<?php $this -> section("js") ?>
<script src="<?= base_url('js/login.js') ?>"> </script>
<?php $this -> endSection() ?>