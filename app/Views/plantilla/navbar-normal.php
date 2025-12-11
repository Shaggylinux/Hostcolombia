<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/nav.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header class="header">
    <div class="logo">
      <a href="<?= base_url('/') ?>"><img src="<?= base_url('imagenes/logo.png') ?>" alt="logo de la marca"></a>
    </div>

    <nav>
      <ul class="nav-links">

        <li><a href="<?= base_url('/productos') ?>">Productos</a></li>
        <li><a href="<?= base_url('/#elegirnos') ?>">Porque elegirnos</a></li>
        <li><a href="<?= base_url('/contacto') ?>">Contacto</a></li>
      </ul>
    </nav>
    <a href="<?= base_url('/login/login') ?>" class="btn"><button>Iniciar sesion</button></a>
  </header>


</body>

</html>



<!-- <header class="header">
  <a href="<?= base_url('/') ?>" class="logo">MIGI</a>
  <a href="<?= base_url('/login/login') ?>" class="btn-login">Iniciar Sesión</a>
</header> -->