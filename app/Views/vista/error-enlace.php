<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url('assets/css/error_enlace.css') ?>">
    <title> ERROR </title>
</head>

<body>

    <div id="container">
        <div class="content">
            <h2>404</h2>
            <h4>Opps! pagina no encontrada</h4>
            <p>La página que estabas buscando no existe. Puede que hayas escrito mal la dirección o que la página haya sido movida.</p>
            <a class="btn" href="<?php echo base_url("/login/login") ?>"> Regresar </a>
        </div>
    </div>

    <script type="text/javascript">
        var conatiner = document.getElementById('container');
        window.onmousemove = function(e) {
            var x = -e.clientX / 5;
            y = -e.clientY / 5;
            container.style.backgroundPosition = x + 'px';
            container.style.backgroundPositionY = y + 'px';

        }
    </script>

</body>

</html>