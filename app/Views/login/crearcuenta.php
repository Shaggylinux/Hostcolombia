<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta - HostColombia</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/Registro.css') ?>">
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="logo-container">
                <div class="logo-circles">
                    <div class="logo-circle logo-circle-outer"></div>
                    <div class="logo-circle logo-circle-middle"></div>
                    <div class="logo-circle logo-circle-inner">
                        <div class="logo-icon"></div>
                    </div>
                </div>
            </div>

            <h1 class="register-title">Crear cuenta</h1>
            <p class="register-subtitle">Completa los datos para registrarte</p>

            <form action="<?= base_url('/login/crearcuenta') ?>" method="post">
                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input 
                        type="text" 
                        id="nombre"
                        name="nombre" 
                        class="form-input" 
                        placeholder="nombre"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="nombreusuario" class="form-label">Nombre pantalla</label>
                    <input 
                        type="text" 
                        id="nombreusuario"
                        name="nombreusuario" 
                        class="form-input" 
                        placeholder="Nombre pantalla" 
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="correo" class="form-label">Correo electrónico</label>
                    <input 
                        type="email" 
                        id="correo"
                        name="correo" 
                        class="form-input" 
                        placeholder="Ingresa tu correo" 
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input 
                        type="password" 
                        id="clave"
                        name="clave" 
                        class="form-input" 
                        placeholder="Ingresa tu contraseña" 
                        required
                    >
                </div>

                <button type="submit" class="submit-btn">
                    Crear cuenta
                </button>
            </form>

            <div class="copyright">
                © 2025 propiedad de SCRUM 4.
            </div>
        </div>
    </div>
</body>
</html> -->
<?= $this->extend("plantilla/layout") ?>

<?= $this->section("css") ?>
<link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
<?= $this->endSection() ?>

<?= $this->section("contenido") ?>

<div class="login-page">
    <div class="background-logo">右</div>

    <div class="login-wrapper">
        <div class="login-card">

            <!-- Icono superior -->
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

            <h2 class="login-title">Crear cuenta</h2>
            <p class="login-subtitle">Regístrate para continuar</p>

            <form action="<?= base_url('/login/crearcuenta') ?>" method="post" class="login-form">

                <div class="form-group">
                    <label>Nombre completo</label>
                    <input type="text" name="nombre" placeholder="Tu nombre completo" required>
                </div>

                <div class="form-group">
                    <label>Nombre de usuario</label>
                    <input type="text" name="nombreusuario" placeholder="Usuario" required>
                </div>

                <div class="form-group">
                    <label>Correo electrónico</label>
                    <input type="email" name="correo" placeholder="correo@example.com" required>
                </div>

                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="clave" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn-submit">Crear cuenta</button>
            </form>

            <footer class="footer-text mt-4">© 2025 propiedad de SCRUM 4.</footer>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section("js") ?>
<script src="<?= base_url('js/login.js') ?>"></script>
<?= $this->endSection() ?>