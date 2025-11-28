<!-- <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"> 右 </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Descargas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url("/general/precios") ?>"> Planes </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url("/login/login") ?>"> Iniciar Sesion </a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="<?= base_url('css/navbar-normal.css') ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <nav class="navbar">
    <a href="/"> <h1 class="logo"> My site web </h1> </a>
    <ul class="nav-link">
      <li><a class="nav-link active" href="<?php echo base_url("/login/login") ?>"> Iniciar Sesion </a></li>
    </ul>
  </nav>



</body>

</html>