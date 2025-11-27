<?php echo $this->extend("plantilla/layout-usuario") ?>
<?php echo $this->section("contenido") ?>

<?php
$imagen = !empty($foto) ? $foto : 'nino.png';
?>

<!-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
</head>

<body>
    <div class="container border rounded p-5 m-5 mx-auto shadow" style="width: 500px;">
        <h1> <?php echo $Userid ?> </h1>
        <h1 class="text-center">MAQUINAS CREADAS</h1>
        <?php foreach ($servidores as $te): ?>
            <div class="input-group flex-nowrap mb-3">
                <a class="btn btn-primary form-control" href="<?php echo base_url("/vista/panel-control/" . $te["id"]) ?>"> <?php echo $te["nombre"] ?> </a>
                <span class="input-group-text"> <a href="<?php echo base_url("/vista/editar-server/" . $te["id"]) ?>"> <i class="fa-solid fa-pencil"></i> </a> </span>
            </div>
        <?php endforeach ?>
        <a href="<?php echo base_url("/vista/usuario-server") ?>" class="btn btn-success form-control shadow"> <i class="fa-solid fa-plus"></i> </a>
    </div>
</body>

</html> -->


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/usuario.css') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="searh--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Buscar...">
                </div>
                <img src="<?= base_url('imagenes/' . $imagen) ?>" alt="">
            </div>
        </div>

        <div class="card--container">
            <h3 class="main--title">CREADAS</h3>

            <div class="card--wrapper">
                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Crear Máquina</span>
                            <span class="amount--value"></span>
                        </div>
                        <a href="<?= base_url("/vista/usuario-server") ?>" class="add-btn">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <span class="card--detail">Crea las maquinas que quieras</span>
                </div>

                <?php foreach ($servidores as $te): ?>
                    <div class="payment--card <?= $te['color'] ?>">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title"><?= $te["id"] ?></span>
                                <span class="amount--value"><?= $te["nombre"] ?></span>
                            </div>
                            <a href="<?= base_url("/vista/panel-control/" . $te["id"]) ?>" class="add-btn <?= $te['oscuros'] ?>"><i class="fas fa-eye "></i></a>
                        </div>
                        <span class="card--detail"> Server #<?= substr($te["id"], -4) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Servidores Creados</h3>
            <div class="table--container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($servidores as $te): ?>
                            <tr>
                                <td><?= $te["id"] ?></td>
                                <td><?= $te["nombre"] ?></td>
                                <?php if($te["online"]):?>
                                    <td><span class="status active">Activo</span></td>
                                <?php else:?>
                                    <td><span class="status active">Apagado</span></td>
                                <?php endif?>
                                <td>
                                    <a href="<?= base_url("/vista/editar-server/" . $te["id"]) ?>" class="edit--btn"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="<?= base_url("/vista/eliminar/" . $te["id"]) ?>" class="delete--btn"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>


<?php echo $this->endSection() ?>