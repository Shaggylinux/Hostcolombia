<?php echo $this->extend("plantilla/layout") ?>
<?php echo $this->section("contenido") ?>

<!DOCTYPE html>
<html lang="es">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/Home.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <section id="Nosotros" class="hero">
        <div class="background-logo">右</div>
        <h1 class="hero-title">¡Crea, protege y disfruta a bajos costos con MIGI!</h1>
        <p class="hero-subtitle">Crear Tunneles en Colombia nunca fue tan fácil con <strong>MIGI</strong>.</p>
        <p class="hero-subtitle">Fácil, rápido, seguro y a los mejores precios.</p>
        <div class="hero-cta">
            <a href="<?= base_url('/login/crearcuenta') ?>" class="btn-register">
                <i class="fa-solid fa-user-plus"></i>
                Registrarse gratis
            </a>
        </div>
    </section>

    <section id="elegirnos" class="features-section">
        <h2 class="section-title">¿Por qué elegirnos?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <i class="fa-solid fa-shield-halved feature-icon icon-cyan"></i>
                <h3>Seguridad</h3>
                <p>Nuestro servicio busca ser fácil de usar y muy accesible para todos los que desean montar sus servidores en Colombia.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-bolt feature-icon icon-yellow"></i>
                <h3>Fácil uso</h3>
                <p>No necesitas experiencia previa. Con nuestra interfaz podrás usar el servicio fácilmente.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-star feature-icon icon-blue"></i>
                <h3>Mejor opción</h3>
                <p>Servicio accesible, confiable y rápido para todos los que buscan montar su servidor en Colombia.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-network-wired feature-icon icon-green"></i>
                <h3>Tunnel Seguro</h3>
                <p>Tecnología similar a Cloudflare Tunnel para exponer tus servidores locales de forma segura sin abrir puertos.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-house-signal feature-icon icon-purple"></i>
                <h3>Servidores Caseros</h3>
                <p>Convierte tu computadora en un servidor profesional accesible desde cualquier lugar del mundo.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-globe-americas feature-icon icon-orange"></i>
                <h3>Hecho en Colombia</h3>
                <p>Mejor opción para colombianos y latinoamericanos. Servidores optimizados para nuestra región con soporte en español.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-wand-magic-sparkles feature-icon icon-cyan"></i>
                <h3>Sin Configuración Compleja</h3>
                <p>Olvídate de configurar routers, NAT y firewalls. Todo se configura automáticamente en minutos.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-piggy-bank feature-icon icon-green"></i>
                <h3>Bajos Costos</h3>
                <p>Los mejores precios del mercado. Aprovecha tu hardware existente y ahorra en hosting tradicional.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>2025 propiedad de SCRUM 4.</p>
    </footer>
</body>

</html>

<?php echo $this->endSection() ?>