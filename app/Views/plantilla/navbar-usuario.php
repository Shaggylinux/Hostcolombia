<link rel="stylesheet" href="<?= base_url('assets/css/navbar-administrador.css') ?>">

<nav class="navbar-custom" aria-label="Administrador navbar">
  <div class="navbar-container">
    <button class="navbar-toggle" id="navbarToggle" aria-expanded="false" aria-controls="navbarMenu" aria-label="Abrir menú">
      <i class="fa-solid fa-bars" id="navbarIcon"></i>
    </button>

    <ul class="navbar-menu" id="navbarMenu" role="menu" aria-hidden="true">
      <li role="none">
        <a role="menuitem" class="navbar-link" href="<?php echo base_url("/vista/usuario") ?>">
          <i class="fa-solid fa-server"></i> Dashboard </a>
      </li>
      <li role="none">
        <a role="menuitem" class="navbar-link" href="<?php echo base_url('/vista/editar-usuario/'.session() -> get('id'))?>">
          <i class="fa-solid fa-users"></i> Editar usuario </a>
      </li>
      <li class="divider" role="separator" aria-hidden="true"></li>
      <li role="none">
        <a role="menuitem" class="navbar-logout" href="<?= base_url('/logout'); ?>">
          <i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión
        </a>
      </li>
    </ul>
  </div>
</nav>

<script>
(function(){
  const toggle = document.getElementById('navbarToggle');
  const menu = document.getElementById('navbarMenu');
  const icon = document.getElementById('navbarIcon');

  if (!toggle || !menu) return;

  function openMenu() {
    menu.classList.add('open');
    menu.setAttribute('aria-hidden', 'false');
    toggle.setAttribute('aria-expanded', 'true');
    // opcional: ambiar icono a X
    if (icon) icon.className = 'fa-solid fa-xmark';
  }
  function closeMenu() {
    menu.classList.remove('open');
    menu.setAttribute('aria-hidden', 'true');
    toggle.setAttribute('aria-expanded', 'false');
    if (icon) icon.className = 'fa-solid fa-bars';
  }

  toggle.addEventListener('click', function(e){
    e.stopPropagation();
    if (menu.classList.contains('open')) closeMenu();
    else openMenu();
  });

  document.addEventListener('click', function(ev){
    const target = ev.target;
    if (!menu.contains(target) && !toggle.contains(target)) {
      closeMenu();
    }
  });

  document.addEventListener('keydown', function(ev){
    if (ev.key === 'Escape') closeMenu();
  });

  closeMenu();
})();
</script>
