<link rel="stylesheet" href="<?= base_url('assets/css/navbar-administrador.css') ?>">

<nav class="navbar-custom">
    <div class="navbar-overlay" id="navbarOverlay"> </div>

    <div class="navbar-container">
        <a href="<?= base_url('/') ?>" class="navbar-logo"> <i class="fa-solid fa-server"></i> HostColombia </a>
        <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle menu">
            <i class="fa-solid fa-bars"></i>
        </button>
        <ul class="navbar-menu" id="navbarMenu">
            <div class="navbar-top">
                <li>
                    <a class="navbar-link" href="<?= base_url('/vista/administrador'); ?>">
                        <i class="fa-solid fa-server"></i> Servidores
                    </a>
                </li>
                <li>
                    <a class="navbar-link <?= uri_string() == 'vista/administrador-usuarios' ? 'active' : '' ?>"
                       href="<?= base_url('/vista/administrador-usuarios'); ?>">
                        <i class="fa-solid fa-users"></i> Usuarios
                    </a>
                </li>
            </div>
            <div class="navbar-bottom">
                <li>
                    <a class="navbar-logout" href="<?= base_url('/logout'); ?>">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Cerrar Sesión
                    </a>
                </li>
            </div>
        </ul>
    </div>
</nav>
<script>
document.getElementById("navbarToggle").addEventListener("click", () => {
    document.getElementById("navbarMenu").classList.toggle("open");
    document.getElementById("navbarOverlay").classList.toggle("show");
});
document.getElementById("navbarOverlay").addEventListener("click", () => {
    document.getElementById("navbarMenu").classList.remove("open");
    document.getElementById("navbarOverlay").classList.remove("show");
});
</script>
