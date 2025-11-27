<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css">


<?= $this->renderSection('css') ?>
</head>

<body>

  <?= $this->include('plantilla/navbar-normal') ?>
  <?= $this->renderSection('contenido') ?>

  <?= $this->renderSection('js') ?>

</body>

</html>