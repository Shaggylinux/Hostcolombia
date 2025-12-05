<!DOCTYPE html>
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
</html>
