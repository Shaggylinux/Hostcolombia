<?php echo $this -> extend("plantilla/layout-usuario")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel <?php  echo $servidor["id"]?></title>
</head>
    <body>
        <h1>Panel de control</h1>
    <h1><?php echo $servidor["nombre"] ?></h1>
    <div>
        <?php if ($online): ?>
            <span class="text-success fw-bold">ONLINE</span>
            <a href="https://<?php echo $servidor["dominio"] ?>"> IR : <?php echo $servidor["dominio"] ?>  </a>
            <?php else: ?>
            <span class="text-danger fw-bold">OFFLINE</span>
            <?php endif;?>
    </div>
    </body>
</html>

<?php echo $this -> endSection()?>