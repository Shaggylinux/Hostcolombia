<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url('assets/css/navbar-administrador.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/Administrador-usuarios.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/usuario.css') ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css">
</head>
<body>
    <?= $this->include("plantilla/navbar-usuario") ?>
    <main class="contenido-admin">
        <?= $this->renderSection("contenido") ?>
    </main>

    <!-- scripts globales si necesitas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
