<?php echo $this -> extend("plantilla/layout-usuario")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel de control</title>
    </head>
    <body>
        <div class="container border rounded p-5 m-5 mx-auto shadow" style="width: 500px;">
            <h1>  <?php echo $Userid ?> </h1>
            <h1 class="text-center">MAQUINAS CREADAS</h1>
            <?php foreach($servidores as $te):?>
                <div class="input-group flex-nowrap mb-3">
                    <a class="btn btn-primary form-control" href="<?php echo base_url("/vista/panel-control/".$te["id"]) ?>">  <?php echo $te["nombre"]?> </a>
                    <span class="input-group-text"> <a href="<?php echo base_url("/vista/editar-server/".$te["id"]) ?>"> <i class="fa-solid fa-pencil"></i> </a> </span>
                </div>
            <?php endforeach?>
            <a href="<?php echo base_url("/vista/usuario-server")?>" class="btn btn-success form-control shadow"> <i class="fa-solid fa-plus"></i> </a>
        </div>
    </body>
</html>

<?php echo $this -> endSection()?>