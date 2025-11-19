<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css">
    <title>Panel de administrativo</title>
</head>
<body>
    <h1>Vista de administrador</h1>
    <a class="btn btn-danger text-center" href="<?php echo base_url("/logout")?>"> <i class="fa-solid fa-right-to-bracket"></i> </a>
    <div class="container  mt-4 shadow border p-4 rounded-5 border-5 mx-auto m-4">
        <table class="table table-striped table-hover table-bordered align-middle rounded text-center">
            <thead class="table-primary">
                <tr>
                    <td> ID USUARIO  </td>
                    <td> Nombre      </td>
                    <td> Descripcion </td>
                    <td> Dominio     </td>
                    <td> D.N.S       </td>
                    <td> Accion      </td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($todo as $t):?>
                <tr>
                    <td> <?php echo $t -> id_usuario  ?> </td>
                    <td> <?php echo $t -> nombre      ?> </td>
                    <td> <?php echo $t -> descripcion ?> </td>
                    <td> <?php echo $t -> dominio     ?> </td>
                    <td> <?php echo $t -> dns         ?> </td>
                    <td>
                        <a href="<?php echo base_url('login/eliminar/' . $t->id)?>" class="btn btn-danger btn-sm shadow-sm"> <i class="fa-solid fa-trash"></i> </a>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>
</html>