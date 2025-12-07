<?php echo $this->extend("plantilla/layout-usuario") ?>
<?php echo $this->section("contenido") ?>

<?php $imagen = !empty($foto) ? $foto : 'nino.png'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/usuario.css') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Panel de control</h2>
            </div>
            <div class="user--info">
                <div class="searh--box">
                    <h3>Bienvenid@ :</h3>
                    <h2><?php echo $usuario["nombreusuario"] ?></h2>
                </div>
                <img src="<?= base_url('imagenes/'.$imagen) ?>" alt="">
            </div>
        </div>
        <div class="card--container">
            <h3 class="main--title">CREADOS</h3>
            <div class="card--wrapper">
                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Crear tunel</span>
                            <span class="amount--value"></span>
                        </div>
                        <a href="<?= base_url("/vista/usuario-server") ?>" class="add-btn">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <span class="card--detail">Crea los tuneles que quieras</span>
                </div>
            <?php foreach ($servidores as $te): ?>
            <div class="payment--card <?php echo $te['color'] ?>">
                <div class="card--header">
                    <?php if ($te["online"]): ?>
                        <td><span class="status active">Activo</span></td>
                    <?php else: ?>
                        <td><span class="status active">Apagado</span></td>
                    <?php endif ?>
                    <div class="amount">
                        <span class="amount--value"> Nombre : <?php echo $te["nombre"] ?> </span>
                    </div>
                    <div class="card--buttons">
                        <a href="<?= base_url("/vista/panel-control/".$te["id"]) ?>" class="add-btn <?php echo $te['oscuros'] ?>">
                            <i class="fas fa-eye"></i>
                        </a>
                    
                        <a href="<?= base_url("/vista/editar-server/".$te["id"]) ?>" class="edit--btn">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </div>
                </div>
                <span class="card--detail">Tunnel #<?php echo substr($te["id"], -4) ?></span>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>

<?php echo $this->endSection() ?>