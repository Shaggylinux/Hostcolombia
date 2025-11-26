<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="<?= base_url('css/navbar.css') ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
      <li class="active">
        <a href="<?php echo base_url("/vista/usuario") ?>">

          <a href="<?= base_url("/vista/usuario") ?>">

            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-user"></i>
          <span>Perfil</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-chart-bar"></i>
          <span>Estadisticas</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-cog"></i>
          <span>Configuración</span>
        </a>
      </li>
      <li class="logout">
        <a href="<?php echo base_url("/logout") ?>">
          <i class="fas fa-sign-out-alt"></i>
          <span>Cerrar sesion</span>
        </a>
      </li>
    </ul>
  </div>

</body>

</html>