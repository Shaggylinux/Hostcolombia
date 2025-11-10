<?php echo $this -> extend("plantilla/layout")?>
<?php echo $this -> section("contenido")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Planes </title>
</head>
<body>
    <h1 class="text-center m-2 border-bottom pb-4 border-5"> Planes </h1>
    <div class=" d-flex">
    <div class="container border rounded-2 m-3 p-3" style="max-width: 500px;">
        <h3 class="text-center">GRATUITO</h3>
        <div class="container border rounded-2 m-3 p-3 mx-auto" style="max-width: 400px;">
            <th>
                <td> <i class="fa-solid fa-percent"></i> 100% gratuito.</td> <br>
                <td> <i class="fa-solid fa-shield-halved"></i> Protección ataque DDOS.</td> <br>
                <td> <i class="fa-solid fa-server"></i> 1 espacio para crear servidores.</td> <br>
                <td> <i class="fa-solid fa-thumbs-up"></i> Control total del servidor.</td> <br>
                <td> <i class="fa-solid fa-desktop"></i> Monitor de recursos.</td> <br>
                <label> <i class="fa-solid fa-database"></i> COMPONENTES</label> <br>
                <td> <i class="fa-solid fa-memory"></i> 4GB de memoria R.A.M.</td> <br>
                <td> <i class="fa-solid fa-microchip"></i> 2 Núcleos a 2.8GHz.</td> <br>
                <td> <i class="fa-solid fa-hard-drive"></i> 120GB de espacio en SSD.</td> <br>
                <td> <i class="fa-solid fa-ethernet"></i> Bus de conexión 500MB.</td> <br>
            </th>
        </div>
    </div>
    <div class="container border rounded-2 m-3 p-3" style="max-width: 500px;">
        <h3 class="text-center">ECONOMICA</h3>
        <div class="container border rounded-2 m-3 p-3 mx-auto" style="max-width: 400px;">
            <th>
                <td><i class="fa-solid fa-angle-right"></i> Protección contra ataque DDOS.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Disponible 3 espacio para crear servidores.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Control total del servidor.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Monitor de recursos.</td> <br>
                <label><i class="fa-solid fa-database"></i> COMPONENTES</label> <br>
                <td><i class="fa-solid fa-angle-right"></i> 6GB de memoria R.A.M.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> 2 Núcleos de procesador a 2.8GHz.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> 240GB de espacio en SSD.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Bus velocidad de conexión 700MB.</td> <br>
            </th>
        </div>
    </div>
        <div class="container border rounded-2 m-3 p-3" style="max-width: 500px;">
        <h3 class="text-center">PRO</h3>
        <div class="container border rounded-2 m-3 p-3 mx-auto" style="max-width: 400px;">
            <th>
                <td><i class="fa-solid fa-angle-right"></i> Protección contra ataque DDOS.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Disponible 5 espacio para crear servidores.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Control total del servidor.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Monitor de recursos.</td> <br>
                <label><i class="fa-solid fa-database"></i> COMPONENTES</label> <br>
                <td><i class="fa-solid fa-angle-right"></i> 8GB de memoria R.A.M.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> 4 Núcleos de procesador a 2.8GHz.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> 512GB de espacio en M.2.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Bus velocidad de conexión 1GB.</td> <br>
            </th>
        </div>
    </div>
        <div class="container border rounded-2 m-3 p-3" style="max-width: 500px;">
        <h3 class="text-center">EMPRESA</h3>
        <div class="container border rounded-2 m-3 p-3 mx-auto" style="max-width: 400px;">
            <th>
                <td><i class="fa-solid fa-angle-right"></i> Protección contra ataque DDOS.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Disponible diferentes dipos de escudos.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Disponible 10 espacio para crear servidores.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Control total del servidor.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Monitor de recursos.</td8> <br>
                <label><i class="fa-solid fa-database"></i> COMPONENTES</label> <br>
                <td><i class="fa-solid fa-angle-right"></i> 32GB de memoria R.A.M.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> 8 Núcleos de procesador a 2.8GHz.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> 1T de espacio en SSD.</td> <br>
                <td><i class="fa-solid fa-angle-right"></i> Bus velocidad de conexión 1T.</td> <br>
            </th>
        </div>
</body>
</html>

<?php echo $this -> endSection()?>
