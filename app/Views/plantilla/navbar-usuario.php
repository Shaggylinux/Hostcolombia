<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?= base_url('css/navbar.css') ?>" />


<label>

  <input type="checkbox">
  <div class="toggle">
    <span class="top_line common"></span>
    <span class="middle_line common"></span>
    <span class="bottom_line common"></span>
  </div>

  <div class="slide">
    <h1 class="menu">Menu</h1>
    <ul>
      <li><span class=""> PLAN : GRATUITO </span></li>
      <li><a href="#"><i class="fas fa-user"></i>Editar Perfil</a></li>
      <li><a href="#"><i class="fas fa-cogs"></i>Configuración</a></li>
      <li><a href="#"><i class="fas fa-folder"></i>Dashboard</a></li>
      <li><a href="#"><i class="fas fa-tv"></i>Dashboard</a></li>
    </ul>
    <a class="btn btn-danger" href="<?php echo base_url("/logout") ?>"> <i class="fa-solid fa-door-open"> </i> Salir </a>
  </div>
</label>